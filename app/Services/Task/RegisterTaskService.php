<?php

namespace App\Services\Task;

use App\Models\Task;
use Illuminate\Http\Request;

class RegisterTaskService
{
    public function __construct(private Request $request) {}

    public function generateTaskObject(): bool
    {
        $data = $this->request->all();

        $data =  $data['decideIA'] == 'true' ? $this->registerTaskIA() : $data;

        return Task::create($data) ? true : false;
    }

    private function registerTaskIA(): array
    {
        return (new GenerateTaskDataIA())->generateDataIA($this->request->all());
    }
}
