<?php

namespace App\Http\Controllers;

use App\Models\Recentsnew;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class RecentsNewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $recentsnewss = Recentsnew::latest()->get();
        return view('layouts.pages.recentsnews.index', compact('recentsnewss'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        return view('layouts.pages.recentsnews.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            // Recent  New description
            'description.required' => 'La description  est obligatoire.',
            'description.string'   => 'La description doit être une chaîne de caractères.',
            'description.min'      => 'La description doit contenir au moins :min caractères.',
            'description.max'      => 'La description ne peut pas dépasser :max caractères.',
        ];

        $validated = $request->validate(
            [
                'description' => [
                    'required',
                    'string',
                    'min:5',
                    'max:500',
                ],
            ],
            $messages
        );
        // preg_replace → supprime les emojis / caractères rares.
        // strip_tags → supprime toutes les balises HTML.
        $cleanDescription = strip_tags(preg_replace('/[\x{10000}-\x{10FFFF}]/u', '', $validated['description']));

        Recentsnew::create([
            'user_id' => Auth::id(),
            'title' => $cleanDescription,
        ]);

        return redirect()->route('recentsnews.index')->with('success-create', 'Annonce enregistrée avec succès.');
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
    public function edit(Recentsnew $recentsnews)
    {
        return view('layouts.pages.recentsnews.edit', compact('recentsnews'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Recentsnew $recentsnews)
    {
        $messages = [
            // Recent  New description
            'description.required' => 'La description  est obligatoire.',
            'description.string'   => 'La description doit être une chaîne de caractères.',
            'description.min'      => 'La description doit contenir au moins :min caractères.',
            'description.max'      => 'La description ne peut pas dépasser :max caractères.',
        ];

        $validated = $request->validate(
            [
                'description' => [
                    'required',
                    'string',
                    'min:5',
                    'max:500',
                ],
            ],
            $messages
        );

        $cleanDescription = preg_replace('/[\x{10000}-\x{10FFFF}]/u', '', $validated['description']);

        $recentsnews->update([
            'user_id' => Auth::id(),
            'title' => $cleanDescription,
            'slug' => Str::slug($validated['description']) . '-' . uniqid()
        ]);

        return redirect()->route('recentsnews.index')->with("success-update", "Annonce modifiée avec succès");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recentsnew $recentsnews)
    {
        $recentsnews->delete();
        return redirect()->route('recentsnews.index')->with("success-delete", "Annonce supprimée avec succès");
    }
}
