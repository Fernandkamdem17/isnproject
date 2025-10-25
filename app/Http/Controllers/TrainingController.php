<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Training;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class TrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trainings = Training::withTrashed()->get();
        return view('layouts.pages.trainings.index', compact('trainings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.pages.trainings.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            // Formation title
            'formation_titled.required' => 'Le titre de la formation est obligatoire.',
            'formation_titled.string'   => 'Le titre de la formation doit être une chaîne de caractères.',
            'formation_titled.min'      => 'Le titre doit contenir au moins :min caractères.',
            'formation_titled.max'      => 'Le titre ne peut pas dépasser :max caractères.',
            'formation_titled.regex'    => 'Le titre contient des caractères non autorisés.',

            // Category
            'category.required' => 'Veuillez sélectionner la catégorie.',
            'category.integer'  => 'La catégorie doit être un identifiant valide.',
            'category.exists'   => 'La catégorie sélectionnée n’existe pas.',

            // Image
            'img.image' => 'Le fichier doit être une image valide.',
            'img.mimes' => 'L’image doit être de type : jpg, jpeg, png ou webp.',
            'img.max'   => 'La taille maximale autorisée pour l’image est de 2 Mo.',
        ];

        $validated = $request->validate(
            [
                'formation_titled' => [
                    'required',
                    'string',
                    'min:5',
                    'max:500',
                    'regex:/^[\pL\s\-\’,.!?0-9]+$/u',
                ],

                'category' => [
                    'required',
                    'integer',
                    'exists:categories,id',
                ],

                'img' => [
                    'nullable',
                    'image',
                    'mimes:jpg,jpeg,png,webp',
                    'max:2048',
                ]
            ],
            $messages
        );

        $cleanTitle = preg_replace('/[\x{10000}-\x{10FFFF}]/u', '', $validated['formation_titled']);

        $imgPath = null;
        if ($request->hasFile('img')) {
            $imgPath = $request->file('img')->store('products', 'public');
        }

        Training::create([
            'user_id' => Auth::id(),
            'category_id' => $validated['category'],
            'title' => $cleanTitle,
            'img' => $imgPath,
        ]);

        return redirect()->route('trainings.index')->with('success-create', 'Formation enregistrée avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('layouts.pages.trainings.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Training $training)
    {
        return view('layouts.pages.trainings.edit', compact('training'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Training $training)
    {
        $messages = [
            // Formation title
            'formation_titled.required' => 'Le titre de la formation est obligatoire.',
            'formation_titled.string'   => 'Le titre de la formation doit être une chaîne de caractères.',
            'formation_titled.min'      => 'Le titre doit contenir au moins :min caractères.',
            'formation_titled.max'      => 'Le titre ne peut pas dépasser :max caractères.',
            'formation_titled.regex'    => 'Le titre contient des caractères non autorisés.',

            // Category
            'category.required' => 'Veuillez sélectionner la catégorie.',
            'category.integer'  => 'La catégorie doit être un identifiant valide.',
            'category.exists'   => 'La catégorie sélectionnée n’existe pas.',

            // Image
            'img.image' => 'Le fichier doit être une image valide.',
            'img.mimes' => 'L’image doit être de type : jpg, jpeg, png ou webp.',
            'img.max'   => 'La taille maximale autorisée pour l’image est de 2 Mo.',
        ];

        $validated = $request->validate(
            [
                'formation_titled' => [
                    'required',
                    'string',
                    'min:5',
                    'max:500',
                    'regex:/^[\pL\pN\s\p{P}]+$/u',
                ],

                'category' => [
                    'required',
                    'integer',
                    'exists:categories,id',
                ],

                'img' => [
                    'nullable',
                    'image',
                    'mimes:jpg,jpeg,png,webp',
                    'max:2048',
                ]
            ],
            $messages
        );

        // preg_replace → supprime les emojis / caractères rares.
        // strip_tags → supprime toutes les balises HTML.
        $cleanTitle = strip_tags(preg_replace('/[\x{10000}-\x{10FFFF}]/u', '', $validated['formation_titled']));


        $imgPath = null;

        if ($request->hasFile('img')) {
            // Supprimer l'ancienne image si elle existe
            if ($training->img && Storage::disk('public')->exists($training->img)) {
                Storage::disk('public')->delete($training->img);
            }

            // Stocker la nouvelle image
            $imgPath = $request->file('img')->store('products', 'public');
        } else {
            // Garder l’ancienne image
            $imgPath = $training->img;
        }

        $training->update([
            'user_id' => Auth::id(),
            'category_id' => $validated['category'],
            'title' => $cleanTitle,
            'img' => $imgPath,
            'slug' => Str::slug($validated['formation_titled']) . '-' . uniqid()
        ]);


        return redirect()->route('trainings.index')->with('success-update', 'Formation modifiée avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Training $training)
    {
        foreach ($training->modules as $module) {

            // Supprimer d'abord les leçons du module
            foreach ($module->lessons as $lesson) {
                $lesson->delete();
            }

            // Puis supprimer le module lui-même
            $module->delete();
        }
        $training->delete();

        return redirect()->route('trainings.index')->with('success', 'Formation supprimé eavec succès');
    }


    public function restore($id)
    {
        // Récupérer la formation supprimée (inclure celles en soft delete)
        $training = Training::withTrashed()->findOrFail($id);

        // Restaurer la formation
        $training->restore();

        // Restaurer les modules liés
        foreach ($training->modules()->withTrashed()->get() as $module) {
            $module->restore();

            // Restaurer les leçons liées à chaque module
            foreach ($module->lessons()->withTrashed()->get() as $lesson) {
                $lesson->restore();
            }
        }

        return redirect()
            ->route('trainings.index')
            ->with('success', 'Formation restaurée avec succès');
    }
}
