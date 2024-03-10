<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ChatGPTController extends Controller
{
    public function index()
    {
        return view('chatgpt');
    }

    public function chat(Request $request)
    {
        // $result = OpenAI::chat()->create([
        //     'model' => 'gpt-3.5-turbo',
        //     'messages' => [
        //         [
        //             'role' => 'system',
        //             'content' => 'You are a helpful assistant.'
        //         ],
        //         [
        //             'role' => 'user',
        //             'content' => 'Hello!'
        //         ],
        //     ],
        // ]);

        // $response = Http::withHeaders([
        //     'Authorization' => 'Bearer ' . config('services.chatgpt.key'),
        //     'Content-Type' => 'application/json',
        //     'Accept' => 'application/json',
        // ])->post(config('services.chatgpt.endpoint'), [
        //     'prompt' => $request->input('prompt'),
        //     'max_tokens' => 150,
        // ]);
        // return response()->json($response->json());

        return view('chatgpt', [
            'prompt' => $request->input('prompt'),
            'response' => $response->json()['choices'][0]['text'],
        ]);
    }
}
