<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class QuizController extends Controller
{

    // public function quiz()
    // {


    //     $apiKey = env('GEMINI_API_KEY');

    //     if (!$apiKey) {
    //         return response()->json(['error' => 'API key not found.'], 500);
    //     }

    //     // 2. Define the API endpoint URL.
    //     $apiUrl = "https://generativelanguage.googleapis.com/v1beta/models/gemini-2.5-flash:generateContent";

    //     // 3. Construct the request body as a PHP array.
    //     $requestBody = [
    //         'system_instruction' => [
    //             'parts' => [
    //                 [
    //                     'text' => "You are a perfume recommender, you have five perfume products in the list below, you must give the user a questions that leads to the products, do not answer if the answer from user is not related to the question you give. Use Bahasa Indonesia. Don't use symbols such as bold indicator (**) and newlines, just give plain text.

    //                                 Here are the list of products and its descriptions 
    //                                 IVORY BLOOM: Unveiling a fresh, 
    //                                 sweet, and exotic character, the 
    //                                 scent blends lychee, rhubarb, 
    //                                 saffron, and bergamot with 
    //                                 Turkish rose, jasmine, and soft 
    //                                 musk. It captures the memory of 
    //                                 a peaceful spring morning in a 
    //                                 blooming garden. 

    //                                 CITRINE FLAME: Radiating a 
    //                                 fresh, fruity, and woody 
    //                                 character, the scent blends 
    //                                 bergamot, apple, plum, and 
    //                                 cedarwood with hints of 
    //                                 geranium. It captures the 
    //                                 memory of a tranquil afternoon in 
    //                                 an apple orchard. 

    //                                 MIDNIGHT CHERRY: A 
    //                                 captivating blend of cherry 
    //                                 liqueur, bitter almond, and 
    //                                 fresh bergamot — a sweet 
    //                                 yet bold aroma that 
    //                                 instantly draws attention. 

    //                                 OUD LÉGENDAIRE: Bright, 
    //                                 tropical, and mysterious, 
    //                                 the scent combines passion 
    //                                 fruit, pineapple, mango, 
    //                                 and bergamot with warm 
    //                                 woods, leather, oud, and 
    //                                 soft amber. 

    //                                 OR DU SOIR: A touch of 
    //                                 coffee and amaretto brings 
    //                                 warmth, like the first sip of a 
    //                                 slow evening. Creamy ice 
    //                                 cream notes melt into bourbon 
    //                                 vanilla, brown sugar, and a 
    //                                 spark of black pepper. 

    //                                 These are the notes of perfume
    //                                 Midnight Cherry
    //                                 Top Notes: Black Cherry, Cherry Liqueur, Bitter Almond, Bergamot.
    //                                 Middle Notes: Orange Blossom, Jasmine Sambac, Cinnamon.
    //                                 Base Notes:  Vanilla, Tonka Bean, Patchouli.

    //                                 Ivory Bloom
    //                                 Top Notes: Lychee, Rhubarb, Bergamot, Saffron.
    //                                 Middle Notes: Turkish Rose, Jasmine.
    //                                 Base Notes: Vanila, Musk.

    //                                 Citrine Flame
    //                                 Top Notes:  Bergamot, Apple, Aromatic Bouquet.
    //                                 Middle Notes:  Plum, Cedarwood, Geranium.
    //                                 Base Notes: Vetiver, Chocolate, Woody Ambery.

    //                                 Oud Legendaire
    //                                 Top Notes: Passionfruit, Fruity, Bergamot.
    //                                 Middle Notes: Woody, Pineapple, Manggo.
    //                                 Base Notes: Woody Notes, Patchouli, Agarwood (Oud), Amber.

    //                                 Or du Soir
    //                                 Top Notes:  Amaretto, Black Pepper.
    //                                 Middle Notes : Ice cream, Caramel, Roasted Coffee.
    //                                 Base Notes: Bourbon Vanilla, Brown Sugar, Tonka Bean, Suede."
    //                 ]
    //             ]
    //         ],
    //         'contents' => [
    //             [
    //                 "role" => "user",
    //                 'parts' => [
    //                     [
    //                         'text' => "Hello there"
    //                     ]
    //                 ]
    //             ]
    //         ]
    //     ];

    //     $response = Http::withHeaders([
    //         'Content-Type' => 'application/json',
    //         'x-goog-api-key' => $apiKey,
    //     ])->post($apiUrl, $requestBody);


    //     if ($response->successful()) {
    //         return response()->json($response->json());
    //     } else {
    //         return response()->json($response->json(), $response->status());
    //     }
    // }

    public function quizChat(Request $request)
    {
        $apiKey = env('GEMINI_API_KEY');

        if (!$apiKey) {
            return response()->json(['error' => 'API key not found.'], 500);
        }

        $validatedData = $request->validate([
            'message' => 'required|string',
        ]);
        $userMessage = $validatedData['message'];

        $chatHistory = session('chat_history', []);

        $chatHistory[] = [
            'role' => 'user',
            'parts' => [
                ['text' => $userMessage]
            ]
        ];

        $apiUrl = "https://generativelanguage.googleapis.com/v1beta/models/gemini-2.5-flash:generateContent";

        $requestBody = [
            'system_instruction' => [
                'parts' => [
                    [
                        'text' => "You are a perfume recommender, you have five perfume products in the list below, you must give the user a questions that leads to the products, do not answer if the answer from user is not related to the question you give. Use Bahasa Indonesia. Don't use symbols such as bold indicator (**) and newlines, just give plain text.

                                    Here are the list of products and its descriptions 
                                    IVORY BLOOM: Unveiling a fresh, 
                                    sweet, and exotic character, the 
                                    scent blends lychee, rhubarb, 
                                    saffron, and bergamot with 
                                    Turkish rose, jasmine, and soft 
                                    musk. It captures the memory of 
                                    a peaceful spring morning in a 
                                    blooming garden. 

                                    CITRINE FLAME: Radiating a 
                                    fresh, fruity, and woody 
                                    character, the scent blends 
                                    bergamot, apple, plum, and 
                                    cedarwood with hints of 
                                    geranium. It captures the 
                                    memory of a tranquil afternoon in 
                                    an apple orchard. 

                                    MIDNIGHT CHERRY: A 
                                    captivating blend of cherry 
                                    liqueur, bitter almond, and 
                                    fresh bergamot — a sweet 
                                    yet bold aroma that 
                                    instantly draws attention. 

                                    OUD LÉGENDAIRE: Bright, 
                                    tropical, and mysterious, 
                                    the scent combines passion 
                                    fruit, pineapple, mango, 
                                    and bergamot with warm 
                                    woods, leather, oud, and 
                                    soft amber. 

                                    OR DU SOIR: A touch of 
                                    coffee and amaretto brings 
                                    warmth, like the first sip of a 
                                    slow evening. Creamy ice 
                                    cream notes melt into bourbon 
                                    vanilla, brown sugar, and a 
                                    spark of black pepper. 

                                    These are the notes of perfume
                                    Midnight Cherry
                                    Top Notes: Black Cherry, Cherry Liqueur, Bitter Almond, Bergamot.
                                    Middle Notes: Orange Blossom, Jasmine Sambac, Cinnamon.
                                    Base Notes:  Vanilla, Tonka Bean, Patchouli.

                                    Ivory Bloom
                                    Top Notes: Lychee, Rhubarb, Bergamot, Saffron.
                                    Middle Notes: Turkish Rose, Jasmine.
                                    Base Notes: Vanila, Musk.

                                    Citrine Flame
                                    Top Notes:  Bergamot, Apple, Aromatic Bouquet.
                                    Middle Notes:  Plum, Cedarwood, Geranium.
                                    Base Notes: Vetiver, Chocolate, Woody Ambery.

                                    Oud Legendaire
                                    Top Notes: Passionfruit, Fruity, Bergamot.
                                    Middle Notes: Woody, Pineapple, Manggo.
                                    Base Notes: Woody Notes, Patchouli, Agarwood (Oud), Amber.

                                    Or du Soir
                                    Top Notes:  Amaretto, Black Pepper.
                                    Middle Notes : Ice cream, Caramel, Roasted Coffee.
                                    Base Notes: Bourbon Vanilla, Brown Sugar, Tonka Bean, Suede."
                    ]
                ]
            ],
            'contents' => $chatHistory,
        ];

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'x-goog-api-key' => $apiKey,
        ])->post($apiUrl, $requestBody);

        if ($response->successful()) {
            $geminiResponse = $response->json();
            $responseText = $geminiResponse['candidates'][0]['content']['parts'][0]['text'] ?? '';

            $chatHistory[] = [
                'role' => 'model',
                'parts' => [
                    ['text' => $responseText]
                ]
            ];

            session(['chat_history' => $chatHistory]);

            return response()->json(['response' => $responseText]);
        } else {
            return response()->json($response->json(), $response->status());
        }
    }
}
