<?php

namespace App\Http\Controllers;

use App\Models\Announce;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AnnounceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $announces = Announce::latest()->get();
        return view('layouts.pages.announces.index', compact('announces'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.pages.announces.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            //  title
            'training.required' => 'Le titre est obligatoire.',
            'training.string'   => 'Le titre doit être une chaîne de caractères.',
            'training.min'      => 'Le titre doit contenir au moins :min caractères.',
            'training.max'      => 'Le titre ne peut pas dépasser :max caractères.',
            'training.regex'    => 'Le titre contient des caractères non autorisés.',

            // Description
            'description.required' => 'Le description  est obligatoire.',
            'description.string'  => 'La description doit être un identifiant valide.',
            'description.min'   => 'La description doit contenir au moins :min caractères.',
            'description.max'   => 'La description doit contenir au moins :max caractères.',
            'description.regex'   => 'La description contient des caractères non autorisés.',

            // Image
            'img.required' => 'L\'image est obligatoire.',
            'img.mimes' => 'L’image doit être de type : jpg, jpeg, png ou webp.',
            'img.max'   => 'La taille maximale autorisée pour l’image est de 2 Mo.',
        ];

        $validated = $request->validate(
            [
                'title' => [
                    'required',
                    'string',
                    'min:5',
                    'max:500',
                    'regex:/^[\pL\s\-\’,\'.!?0-9]+$/u',
                ],

                'description' => [
                    'required',
                    'string',
                    'min:5',
                    'max:1000',
                    'regex:/^[\pL\s\-\’,\'.!?0-9]+$/u',
                ],

                'img' => [
                    'required',
                    'mimes:jpg,JPG,JPEG,jpeg,png,PNG,webp,WEBP',
                    'max:2048',
                ]
            ],
            $messages
        );

        $cleanTitle = strip_tags(preg_replace('/[\x{10000}-\x{10FFFF}]/u', '', $validated['title']));
        $cleanDescription = strip_tags(preg_replace('/[\x{10000}-\x{10FFFF}]/u', '', $validated['description']));

        $imgPath = null;
        if ($request->hasFile('img')) {
            $imgPath = $request->file('img')->store('announces', 'public');
        }

        Announce::create([
            'user_id' => Auth::id(),
            'title' => $cleanTitle,
            'description' => $cleanDescription,
            'img' => $imgPath,
        ]);

        return redirect()->route('announces.index')->with('success-create', 'Annonce enregistrée avec succès.');
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
    public function edit(Announce $announce)
    {
        return view('layouts.pages.announces.edit', compact('announce'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Announce $announce)
    {
        $messages = [
            //  title
            'training.required' => 'Le titre est obligatoire.',
            'training.string'   => 'Le titre doit être une chaîne de caractères.',
            'training.min'      => 'Le titre doit contenir au moins :min caractères.',
            'training.max'      => 'Le titre ne peut pas dépasser :max caractères.',
            'training.regex'    => 'Le titre contient des caractères non autorisés.',

            // Description
            'description.required' => 'Le description  est obligatoire.',
            'description.string'  => 'La description doit être un identifiant valide.',
            'description.min'   => 'La description doit contenir au moins :min caractères.',
            'description.max'   => 'La description doit contenir au moins :max caractères.',
            'description.regex'   => 'La description contient des caractères non autorisés.',

            // Image
            'img.mimes' => 'L’image doit être de type : jpg, jpeg, png ou webp.',
            'img.max'   => 'La taille maximale autorisée pour l’image est de 2 Mo.',
        ];

        $validated = $request->validate(
            [
                'title' => [
                    'required',
                    'string',
                    'min:5',
                    'max:500',
                    'regex:/^[\pL\s\-\’,\'.!?0-9]+$/u',
                ],

                'description' => [
                    'required',
                    'string',
                    'min:5',
                    'max:1000',
                    'regex:/^[\pL\s\-\’,\'.!?0-9]+$/u',
                ],

                'img' => [
                    'nullable',
                    'mimes:jpg,JPG,JPEG,jpeg,png,PNG,webp,WEBP',
                    'max:2048',
                ]
            ],
            $messages
        );

        $cleanTitle = strip_tags(preg_replace('/[\x{10000}-\x{10FFFF}]/u', '', $validated['title']));
        $cleanDescription = strip_tags(preg_replace('/[\x{10000}-\x{10FFFF}]/u', '', $validated['description']));

        $imgPath = null;
        if ($request->hasFile('img')) {
            // Supprimer l'ancienne image si elle existe
            if ($announce->img && Storage::disk('public')->exists($announce->img)) {
                Storage::disk('public')->delete($announce->img);
            }

            // Stocker la nouvelle image
            $imgPath = $request->file('img')->store('announces', 'public');
        } else {
            // Garder l’ancienne image
            $imgPath = $announce->img;
        }

        $announce->update([
            'user_id' => Auth::id(),
            'title' => $cleanTitle,
            'description' => $cleanDescription,
            'img' => $imgPath,
        ]);

        return redirect()->route('announces.index')->with('success-update', 'Annonce enregistrée avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Announce $announce)
    {
        $announce->delete();
        return redirect()->route('announces.index')->with('success-delete', 'Annonce supprimée avec succès.');
    }
}
