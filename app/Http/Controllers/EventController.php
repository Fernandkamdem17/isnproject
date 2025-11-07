<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::latest()->get();
        return view('layouts.pages.events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.pages.events.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            //  title
            'title.string'   => 'Le titre doit être une chaîne de caractères.',
            'title.min'      => 'Le titre doit contenir au moins :min caractères.',
            'title.max'      => 'Le titre ne peut pas dépasser :max caractères.',
            'title.regex'    => 'Le titre contient des caractères non autorisés.',

            //  lien de la vidéo
            'link.required'   => 'Le lien de la vidéo est obligatoire.',
            'link.url'      => 'Le lien de la vidéo doit être une URL.',

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
                    'nullable',
                    'string',
                    'min:5',
                    'max:500',
                    'regex:/^[\pL\s\-\’,\'.!?0-9]+$/u',
                ],
                'link' => [
                    'required',
                    'url',
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

        $imgPath = null;
        if ($request->hasFile('img')) {
            $imgPath = $request->file('img')->store('events', 'public');
        }

        Event::create(
            [
                'user_id' => Auth::id(),
                'title' => $validated['title'],
                'link' => $validated['link'],
                'description' => $validated['description'],
                'img' => $imgPath,

            ]
        );

        return redirect()->route('events.index')->with('success-create', 'Evènemment crée avec succès');
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
    public function edit(Event $event)
    {
        return view('layouts.pages.events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        $messages = [
            //  title
            'title.string'   => 'Le titre doit être une chaîne de caractères.',
            'title.min'      => 'Le titre doit contenir au moins :min caractères.',
            'title.max'      => 'Le titre ne peut pas dépasser :max caractères.',
            'title.regex'    => 'Le titre contient des caractères non autorisés.',

            //  lien de la vidéo
            'link.required'   => 'Le lien de la vidéo est obligatoire.',
            'link.url'      => 'Le lien de la vidéo doit être une URL.',

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
                    'nullable',
                    'string',
                    'min:5',
                    'max:500',
                    'regex:/^[\pL\s\-\’,\'.!?0-9]+$/u',
                ],
                'link' => [
                    'required',
                    'url',
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

        $imgPath = null;
        if ($request->hasFile('img')) {
            // Supprimer l'ancienne image si elle existe
            if ($event->img && Storage::disk('public')->exists($event->img)) {
                Storage::disk('public')->delete($event->img);
            }
            // Stocker la nouvelle image
            $imgPath = $request->file('img')->store('events', 'public');
        } else {
            // Garder l’ancienne image
            $imgPath = $event->img;
        }

        $event->update(
            [
                'user_id' => Auth::id(),
                'title' => $validated['title'],
                'link' => $validated['link'],
                'description' => $validated['description'],
                'img' => $imgPath,

            ]
        );

        return redirect()->route('events.index')->with('success-update', 'Evènemment modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        $event->delete();

        return redirect()->route('events.index')->with('success-delete', 'Evènemment suppimé avec succès');
    }
}
