<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::latest()->get();
        return view('layouts.pages.testimonials.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.pages.testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            // Name  title
            'name.required' => 'Le nom  est obligatoire.',
            'name.string'   => 'Le nom doit être une chaîne de caractères.',
            'name.regex'    => 'Le nom contient des caractères non autorisés.',

            // Speciality title
            'training.required' => 'La spécialité de l\'étudiant est obligatoire.',
            'training.string'   => 'La spécialité de l\'étudiant doit être une chaîne de caractères.',
            'training.min'      => 'La spécialité doit contenir au moins :min caractères.',
            'training.max'      => 'La spécialité ne peut pas dépasser :max caractères.',
            'training.regex'    => 'La spécialité contient des caractères non autorisés.',

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
                'name' => [
                    'required',
                    'string',
                    'regex:/^[\pL\s\-\’,\'.!?0-9]+$/u',
                ],

                'training' => [
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

        $cleanName = strip_tags(preg_replace('/[\x{10000}-\x{10FFFF}]/u', '', $validated['name']));
        $cleanTraining = strip_tags(preg_replace('/[\x{10000}-\x{10FFFF}]/u', '', $validated['training']));
        $cleanDescription = strip_tags(preg_replace('/[\x{10000}-\x{10FFFF}]/u', '', $validated['description']));

        $imgPath = null;
        if ($request->hasFile('img')) {
            $imgPath = $request->file('img')->store('testimonials', 'public');
        }

        Testimonial::create([
            'user_id' => Auth::id(),
            'name' => $cleanName,
            'training' => $cleanTraining,
            'description' => $cleanDescription,
            'img' => $imgPath,
        ]);

        return redirect()->route('testimonials.index')->with('success-create', 'Témoignage enregistrée avec succès.');
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
    public function edit(Testimonial $testimonial)
    {
        return view('layouts.pages.testimonials.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimonial $testimonial)
    { {
            $messages = [
                // Name  title
                'name.required' => 'Le nom  est obligatoire.',
                'name.string'   => 'Le nom doit être une chaîne de caractères.',
                'name.regex'    => 'Le nom contient des caractères non autorisés.',

                // Speciality title
                'training.required' => 'La spécialité de l\'étudiant est obligatoire.',
                'training.string'   => 'La spécialité de l\'étudiant doit être une chaîne de caractères.',
                'training.min'      => 'La spécialité doit contenir au moins :min caractères.',
                'training.max'      => 'La spécialité ne peut pas dépasser :max caractères.',
                'training.regex'    => 'La spécialité contient des caractères non autorisés.',

                // Description
                'description.required' => 'Le description  est obligatoire.',
                'description.string'  => 'La description doit être un identifiant valide.',
                'description.min'   => 'La description doit contenir au moins :min caractères.',
                'description.max'   => 'La description doit contenir au moins :max caractères.',
                'description.regex'   => 'La description contient des caractères non autorisés.',

                // Image
                'img.mimes' => 'L’image doit être de type : jpg, jpeg, png ou webp.',
                'img.max'   => 'La taille maximale autorisée pour l’image est de 2 Mo.',
                'img.image' => 'Le fichier doit être une image valide.',
            ];

            $validated = $request->validate(
                [
                    'name' => [
                        'required',
                        'string',
                        'regex:/^[\pL\s\-\’,\'.!?0-9]+$/u',
                    ],

                    'training' => [
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
                        'image',
                        'mimes:jpg,JPG,JPEG,jpeg,png,PNG,webp,WEBP',
                        'max:2048',
                    ]
                ],
                $messages
            );

            $cleanName = strip_tags(preg_replace('/[\x{10000}-\x{10FFFF}]/u', '', $validated['name']));
            $cleanTraining = strip_tags(preg_replace('/[\x{10000}-\x{10FFFF}]/u', '', $validated['training']));
            $cleanDescription = strip_tags(preg_replace('/[\x{10000}-\x{10FFFF}]/u', '', $validated['description']));

            $imgPath = null;

            if ($request->hasFile('img')) {
                // Supprimer l'ancienne image si elle existe
                if ($testimonial->img && Storage::disk('public')->exists($testimonial->img)) {
                    Storage::disk('public')->delete($testimonial->img);
                }

                // Stocker la nouvelle image
                $imgPath = $request->file('img')->store('testimonials', 'public');
            } else {
                // Garder l’ancienne image
                $imgPath = $testimonial->img;
            }

            $testimonial->update([
                'user_id' => Auth::id(),
                'name' => $cleanName,
                'training' => $cleanTraining,
                'description' => $cleanDescription,
                'img' => $imgPath,
            ]);

            return redirect()->route('testimonials.index')->with('success-create', 'Témoignage enregistrée avec succès.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();
        return redirect()->route('testimonials.index')->with('success-delete', 'Témoignage supprimée avec succès.');
    }
}
