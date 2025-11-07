<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries = Gallery::latest()->get();
        return view('layouts.pages.galleries.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.pages.galleries.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'img.required' => 'L’image est obligatoire.',
            'img.mimes' => 'L’image doit être de type : jpg, jpeg, png ou webp.',
            'img.max'   => 'La taille maximale autorisée pour l’image est de 2 Mo.',
            'img.image' => 'Le fichier doit être une image valide.',
        ];

        $validated = $request->validate(
            [
                'img' => [
                    'required',
                    'image',
                    'mimes:jpg,JPG,JPEG,jpeg,png,PNG,webp,WEBP',
                    'max:2048',
                ]
            ],
            $messages
        );

        $imgPath = null;
        if ($request->hasFile('img')) {
            $imgPath = $request->file('img')->store('galleries', 'public');
        }

        Gallery::create(
            [
                'user_id' => Auth::id(),
                'img' => $imgPath
            ]
        );

        return redirect()->route('galleries.index')->with('success-create', 'Photo créée avec succès');
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
    public function edit(Gallery $gallery)
    {
        return view('layouts.pages.galleries.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallery $gallery)
    {

        $messages = [
            'img.mimes' => 'L’image doit être de type : jpg, jpeg, png ou webp.',
            'img.max'   => 'La taille maximale autorisée pour l’image est de 2 Mo.',
            'img.image' => 'Le fichier doit être une image valide.',
        ];

        $validated = $request->validate(
            [
                'img' => [
                    'nullable',
                    'image',
                    'mimes:jpg,JPG,JPEG,jpeg,png,PNG,webp,WEBP',
                    'max:2048',
                ]
            ],
            $messages
        );

        $imgPath = null;

        if ($request->hasFile('img')) {
            // Supprimer l'ancienne image si elle existe
            if ($gallery->img && Storage::disk('public')->exists($gallery->img)) {
                Storage::disk('public')->delete($gallery->img);
            }

            // Stocker la nouvelle image
            $imgPath = $request->file('img')->store('galleries', 'public');
        } else {
            // Garder l’ancienne image
            $imgPath = $gallery->img;
        }

        $gallery->update([
            'img' => $imgPath
        ]);


        return redirect()->route('galleries.index')->with('success-update', 'Photo modifiée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        $gallery->delete();
        return redirect()->route('galleries.index')->with('success-delete', 'Photo supprimée avec succès');
    }
}
