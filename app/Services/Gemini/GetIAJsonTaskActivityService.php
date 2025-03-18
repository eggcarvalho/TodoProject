<?php

namespace App\Services\Gemini;

use App\Services\Responsibles\GetListResponsibleService;
use Gemini;
use App\Services\Services;
use Gemini\Client;
use Illuminate\Http\Request;
use Gemini\Data\GenerationConfig;


class GetIAJsonTaskActivityService extends Services
{

    private Client $client;
    private GenerationConfig $generationConfig;

    public function __construct()
    {
        $this->generationConfig = new GenerationConfig(
            temperature: 1,
            topP: 0.5,
            topK: 64,
        );


        $this->client = Gemini::client(getenv('GOOGLE_GEMINI_KEY_ID'));
    }


    public function getJSONGemini(array $data): string
    {


        $prompt = $this->getPrompt($data);
        return $prompt;
    }

    private function getPrompt($data): string
    {

        $text = 'Analyze the following JSON object and the list of responsible people. Return a JSON with the following structure:

                1. responsible_id: The ID of the responsible person, selected based on their function. If the function is not found, assign the task to the responsible person with the function "faz tudo".
                2. status: Always set to "in-progress".
                3. ia_manager: Always set to true.
                4. priority: The task temperature (low, mid, and high).
                5. ia_path:  description of how the task will be performed, including step-by-step (if be a case) instructions (in Portuguese). The steps must be formatted in HTML, with proper organization.
                6. deadline: The time predictability, in timestamp (e.g., 1200 for 20 minutes).

                JSON object to be analyzed:
                ' . $this->generateJsonData($data) . '

                Return ONLY the JSON as plain text, without any additional formatting, code blocks, or markdown. The response values must be in Portuguese, except for the keys.';


        return str_replace(['```json', '```', '\n'], '', $this->client->generativeModel('gemini-2.0-flash')->withGenerationConfig($this->generationConfig)->generateContent($text)->text());
    }

    private function generateJsonData($data): string
    {
        $data['responsible'] = (new GetListResponsibleService())->getResponsibles()->toArray();

        return json_encode($data);
    }
}
