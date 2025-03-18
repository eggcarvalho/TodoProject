<?php

namespace App\Services\List;

use App\Services\Gemini\GetIAJsonTaskActivityService;
use App\Services\Services;

class GenerateTaskDataIA extends Services
{
    public function generateDataIA(array $data)
    {
        $gemini = new GetIAJsonTaskActivityService();


        $unset = ['_token', 'decideIA', 'responsible_id', 'priority', 'deadline'];

        foreach ($unset as $value) {
            unset($data[$value]);
        }

        $iaObj = (array) json_decode($gemini->getJSONGemini($data));


        $data = array_merge($data, $iaObj);
        $data['deadline'] = now()->addSeconds($iaObj['deadline']);

        return $data;
    }
}
