<?php

namespace App\Http\OpenAI;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class ChatGPTServices
{
    /**
     * @param array $questions
     * @return array [$ChatGPTAPIResponse, $responseCode]
     */
    public function sendChatGPTRequest(array $questions): array
    {

        $res = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer '.env('OPEN_AI_SECRET_KEY'),
        ])->post("https://api.openai.com/v1/chat/completions", [
                "model" => "gpt-3.5-turbo",
                'messages' => $this->toAcceptableFormat($questions),
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

        return [$res->json()["error"], $res->status()];

    }

    /**
     * @param array $questions
     * @return array
     */
    private function toAcceptableFormat(array $questions): array
    {
        $data = [];
        foreach ($questions as $key => $question) {
            $data[] = $question[0];
            if ($key == count($questions) - 1)
                break;
            $data[] = $question[1];
        }
        return $data;
    }


}
