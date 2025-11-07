{{-- Fichier: resources/views/layouts/emails/contact.blade.php --}}

<x-mail::message>
# Nouveau Message de Contact

Un nouveau message a été reçu depuis votre formulaire de contact.

<x-mail::panel>
**De la part de :** {{ $name }} ({{ $email }})  
**Sujet :** {{ $subject }}
</x-mail::panel>

**Message :**
---
{{ $message }}
---

<x-mail::button :url="'mailto:' . $email">
Répondre au Contact
</x-mail::button>

</x-mail::message>