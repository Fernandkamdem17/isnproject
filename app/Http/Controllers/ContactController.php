<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function SendMessage(Request $request)
    {
        $validated = $request->validate(
            [
                'subject' => 'required|string',
                'name' => 'required|string|max:255',
                'email' => 'required|email',
                'message' => 'required|string',
            ],
            [
                'subject.required' => 'Le sujet est obligatoire.',
                'subject.string' => 'Le sujet doit être une chaîne de caractères.',
                'name.required' => 'Le nom est obligatoire.',
                'name.string' => 'Le nom doit être une chaîne de caractères.',
                'name.max'      => 'La description ne peut pas dépasser :max caractères.',
                'email.required'   => 'L\'email doit être obligatoire.',
                'email.email'      => 'La syntaxe n\'est pas correcte',
                'message.required'   => 'Le message doit être obligatoire.',
                'message.string'      => 'Le message doit être une chaîne de caractères.',
            ]
        );
        try {
            Mail::to('fernandkamdem7@gmail.com')->send(new ContactMail($validated));
            return back()->with('success-send', 'Votre message a été envoyé avec succès');
        } catch (TransportExceptionInterface $e) {
            // Échec: Enregistre l'erreur dans les logs et informe l'utilisateur
            Log::error('Erreur lors de l\'envoi de l\'e-mail: ' . $e->getMessage());

            return back()->withInput()->withErrors([
                'email_send_failure' => 'Désolé, une erreur est survenue lors de l\'envoi du message. Veuillez réessayer plus tard.',
            ]);
        }
    }
}
