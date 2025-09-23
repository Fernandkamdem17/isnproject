<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// class ChatbotController extends Controller
// {
//     public function chat(Request $request)
//     {
//         $message = $request->input('message');

//         // Clé API
//         $apiKey = config('chatbot.api_key');

//         // Ici tu peux intégrer ton moteur d'IA
//         // Exemple simple : FAQ locale
//         $faq = [
//             "bonjour" => "Bonjour et bienvenue au Centre de Formation !",
//             "domaines" => "Nous proposons des formations en numérique, paramédical et langues."
//         ];

//         $response = "Désolé, je n'ai pas compris votre question.";

//         foreach ($faq as $key => $answer) {
//             if (stripos($message, $key) !== false) {
//                 $response = $answer;
//                 break;
//             }
//         }

//         return response()->json(['response' => $response]);
//     }
// }



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ChatbotController extends Controller
{
    public function chat(Request $request)
    {
        $userMessage = $request->input('message');

        if (!$userMessage) {
            return response()->json(['response' => 'Aucun message reçu.']);
        }

        $apiKey = config('chatbot.gemini_api_key');
        $apiUrl = "https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash:generateContent";

        // Construire le payload
        $payload = [
            "contents" => [[
                "parts" => [["text" => $userMessage]]
            ]]
        ];

        try {
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'X-goog-api-key' => $apiKey
            ])->withOptions([
                'verify' => 'C:/wamp64/bin/php/php8.2.18/extras/ssl/cacert.pem'  // chemin vers ton certificat
            ])->withBody(json_encode($payload), 'application/json')
                ->post($apiUrl);

            $data = $response->json();

            if (isset($data['candidates'][0]['content']['parts'][0]['text'])) {
                $botResponse = $data['candidates'][0]['content']['parts'][0]['text'];
            } elseif (isset($data['candidates'][0]['output'][0]['content'])) {
                $botResponse = $data['candidates'][0]['output'][0]['content'];
            } else {
                $botResponse = "Désolé, je n'ai pas pu obtenir de réponse.";
            }
        } catch (\Exception $e) {
            $botResponse = "Erreur lors de la communication avec l'IA : " . $e->getMessage();
        }


        return response()->json(['response' => $botResponse]);
    }
}
