<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    // Déclaration de la propriété pour une meilleure lisibilité et typage
    public array $data;

    /**
     * Crée une nouvelle instance de message.
     */
    public function __construct(array $validated)
    {
        $this->data = $validated;
    }

    /**
     * Obtient l'enveloppe du message (métadonnées: destinataires, sujet, etc.).
     */
    public function envelope(): Envelope
    {
        // Utilisation de l'email du contact dans le sujet
        return new Envelope(
            // Le sujet est désormais pris directement de la donnée validée
            subject: 'Nouveau message de contact de: ' . $this->data['email'],
        );
    }

    /**
     * Obtient la définition du contenu du message (la vue et ses données).
     */
    public function content(): Content
    {
        // La vue est définie ici
        return new Content(
            markdown: 'layouts.emails.contact',
            // Les données sont passées à la vue via la propriété 'with'
            with: [
                'name'    => $this->data['name'],
                'subject' => $this->data['subject'],
                'email'   => $this->data['email'],
                'message' => $this->data['message'],
            ],
        );
    }

    /**
     * Obtient les pièces jointes pour le message.
     */
    public function attachments(): array
    {
        return [];
    }

    // La méthode build() est supprimée car elle est remplacée par envelope() et content()
}
