<?php

namespace App\Http\Controllers;

use App\Models\Module;
use App\Models\Training;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use illuminate\Support\Str;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $modules = Module::withTrashed()
            ->orderBy('training_id', 'asc') // d’abord par formation
            ->orderBy('id', 'asc')          // ensuite par module_id croissant
            ->get();
        return view('layouts.pages.modules.index', compact('modules'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Charger chaque catégorie avec ses formations associées
        $categories = \App\Models\Category::with('trainings')->get();

        return view('layouts.pages.modules.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            // Formation title
            'module_titled.required' => 'Le titre du module est obligatoire.',
            'module_titled.string'   => 'Le titre du module doit être une chaîne de caractères.',
            'module_titled.min'      => 'Le titre doit contenir au moins :min caractères.',
            'module_titled.max'      => 'Le titre ne peut pas dépasser :max caractères.',
            'module_titled.regex'    => 'Le titre contient des caractères non autorisés.',

            // Category
            'training_id.required' => 'Veuillez sélectionner la formation.',
            'training_id.integer'  => 'La formation doit être un identifiant valide.',
            'training_id.exists'   => 'La formation sélectionnée n’existe pas.',
        ];

        $validated = $request->validate(
            [
                'training_id' => [
                    'required',
                    'integer',
                    'exists:trainings,id',
                ],

                'module_titled' => [
                    'required',
                    'string',
                    'min:5',
                    'max:500',
                    'regex:/^[\pL\pN\s\p{P}]+$/u',
                ]
            ],
            $messages
        );

        // preg_replace → supprime les emojis / caractères rares.
        // strip_tags → supprime toutes les balises HTML.
        $cleanTitle = strip_tags(preg_replace('/[\x{10000}-\x{10FFFF}]/u', '', $validated['module_titled']));

        Module::create([
            'user_id' => Auth::id(),
            'training_id' => $validated['training_id'],
            'title' => $cleanTitle,
        ]);

        return redirect()->route('modules.index')->with('success-create', 'Module enregistré avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Module $module)
    {
        $categories = \App\Models\Category::with('trainings')->get();
        return view('layouts.pages.modules.edit', compact('module', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Module $module)
    {
        $messages = [
            // Formation title
            'module_titled.required' => 'Le titre du module est obligatoire.',
            'module_titled.string'   => 'Le titre du module doit être une chaîne de caractères.',
            'module_titled.min'      => 'Le titre doit contenir au moins :min caractères.',
            'module_titled.max'      => 'Le titre ne peut pas dépasser :max caractères.',
            'module_titled.regex'    => 'Le titre contient des caractères non autorisés.',

            // Category
            'training_id.required' => 'Veuillez sélectionner la formation.',
            'training_id.integer'  => 'La formation doit être un identifiant valide.',
            'training_id.exists'   => 'La formation sélectionnée n’existe pas.',
        ];

        $validated = $request->validate(
            [
                'training_id' => [
                    'required',
                    'integer',
                    'exists:trainings,id',
                ],

                'module_titled' => [
                    'required',
                    'string',
                    'min:5',
                    'max:500',
                    'regex:/^[\pL\pN\s\p{P}]+$/u',
                ]
            ],
            $messages
        );

        // preg_replace → supprime les emojis / caractères rares.
        // strip_tags → supprime toutes les balises HTML.
        $cleanTitle = strip_tags(preg_replace('/[\x{10000}-\x{10FFFF}]/u', '', $validated['module_titled']));

        $module->update([
            'user_id' => Auth::id(),
            'training_id' => $validated['training_id'],
            'title' => $cleanTitle,
            'slug' => Str::slug($cleanTitle) . '-' . uniqid()
        ]);

        return redirect()->route('modules.index')->with('success-create', 'Module modifié avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Module $module)
    {
        foreach ($module->lessons as $lesson) {
            //  supprimer les leçons associées
            $lesson->delete();
        }
        $module->delete();

        return redirect()->route('modules.index')->with('success', 'Module supprimé eavec succès');
    }


    public function restore($id)
    {
        // Récupérer le module supprimé (inclure celles en soft delete)
        $module = Module::withTrashed()->findOrFail($id);

        // Restaurer le module
        $module->restore();

        // Restaurer les leçons liées
        foreach ($module->lessons()->withTrashed()->get() as $lesson) {
            $lesson->restore();
        }

        return redirect()
            ->route('modules.index')
            ->with('success', 'Module restauré avec succès');
    }
}
