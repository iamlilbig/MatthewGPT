<?php

namespace App\Http\OpenAI;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ChatGPTServices
{

    public function sendChatGPTRequest(array $questions)
    {


        if(count($questions) == 1){
            return $this->sendChatGPTResponseRequest($questions);
        }

        $data = [];
        foreach ($questions as $key => $question){
            $data[] = $question[0];
            if ($key == count($questions)-1)
                break;
            $data[] = $question[1];
        }

        $res = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer '.env('OPEN_AI_SECRET_KEY'),
        ])
            ->post("https://api.openai.com/v1/chat/completions", [
                "model" => "gpt-3.5-turbo",
                'messages' => $data,
                'temperature' => 0.8,
                "max_tokens" => 3500,
                "top_p" => 0.9,
                "frequency_penalty" => 0,
                "presence_penalty" => 0,
                "stop" => ["11."],
            ]);

        if($res->status() == 200){
            return [$res->json()["choices"][0]["message"], 200];
        }

        return [$res->json()["error"], 429];


    }


    public function sendChatGPTResponseRequest(array $questions)
    {



        $res = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer '.env('OPEN_AI_SECRET_KEY'),
        ])
            ->post("https://api.openai.com/v1/chat/completions", [
                "model" => "gpt-3.5-turbo",
                'messages' => [
                    [
                        "role" => "user",
                        "content" => $questions[0][0]["content"]
                    ]
                ],
                'temperature' => 0.5,
                "max_tokens" => 4000,
                "top_p" => 0.8,
                "frequency_penalty" => 0.52,
                "presence_penalty" => 0.5,
                "stop" => ["11."],
            ]);

        if($res->status() == 200){
            return [$res->json()["choices"][0]["message"], 200];
        }

        return [$res->json()["error"], 429];

    }

}
