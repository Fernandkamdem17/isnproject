<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faqs = Faq::latest()->get();
        return view('layouts.pages.faqs.index', compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.pages.faqs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            // Recent  New description
            'question.required' => 'La question  est obligatoire.',
            'question.string'   => 'La question doit être une chaîne de caractères.',
            'question.min'      => 'La question doit contenir au moins :min caractères.',
            'question.max'      => 'La description ne peut pas dépasser :max caractères.',


            'response.required' => 'La réponse  est obligatoire.',
            'réponse.string'   => 'La réponse doit être une chaîne de caractères.',
            'réponse.min'      => 'La response doit contenir au moins :min caractères.',
            'response.max'      => 'La réponse ne peut pas dépasser :max caractères.',
        ];

        $validated = $request->validate(
            [
                'question' => [
                    'required',
                    'string',
                    'min:5',
                    'max:255',
                ],
                'response' => [
                    'required',
                    'string',
                    'min:5',
                    'max:500',
                ],
            ],
            $messages
        );
        $cleanQuestion = strip_tags(preg_replace('/[\x{10000}-\x{10FFFF}]/u', '', $validated['question']));
        $cleanResponse = strip_tags(preg_replace('/[\x{10000}-\x{10FFFF}]/u', '', $validated['response']));
        Faq::create([
            'user_id' => Auth::id(),
            'title' => $cleanQuestion,
            'description' => $cleanResponse,
        ]);

        return redirect()->route('faqs.index')->with('success-create', 'FAQ enregistré avec succès.');
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
    public function edit(Faq $faq)
    {
        return view('layouts.pages.faqs.edit', compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Faq $faq)
    {
        $messages = [
            // Recent  New description
            'question.required' => 'La question  est obligatoire.',
            'question.string'   => 'La question doit être une chaîne de caractères.',
            'question.min'      => 'La question doit contenir au moins :min caractères.',
            'question.max'      => 'La description ne peut pas dépasser :max caractères.',


            'response.required' => 'La réponse  est obligatoire.',
            'réponse.string'   => 'La réponse doit être une chaîne de caractères.',
            'réponse.min'      => 'La response doit contenir au moins :min caractères.',
            'response.max'      => 'La réponse ne peut pas dépasser :max caractères.',
        ];

        $validated = $request->validate(
            [
                'question' => [
                    'required',
                    'string',
                    'min:5',
                    'max:255',
                ],
                'response' => [
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
        $cleanQuestion = strip_tags(preg_replace('/[\x{10000}-\x{10FFFF}]/u', '', $validated['question']));
        $cleanResponse = strip_tags(preg_replace('/[\x{10000}-\x{10FFFF}]/u', '', $validated['response']));


        $faq->update([
            'user_id' => Auth::id(),
            'title' => $cleanQuestion,
            'description' => $cleanResponse,
            'slug' => Str::slug($validated['question']) . '-' . uniqid()
        ]);

        return redirect()->route('faqs.index')->with('success-update', 'FAQ modifié avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Faq $faq)
    {
        $faq->delete();
        return redirect()->route('faqs.index')->with("success-delete", "FAQ supprimé avec succès");
    }
}
