<?php

namespace App\Services\Task;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Mail\SendEmailNotification;
use Illuminate\Support\Facades\Mail;
use App\Services\Task\GenerateTaskDataIA;

class RegisterTaskService
{
    public function __construct(private Request $request) {}

    public function generateTaskObject(): bool
    {
        $data = $this->request->all();

        $data =  $data['decideIA'] == 'true' ? $this->registerTaskIA() : $data;


        Mail::to('teste@gmail.com')->later(now()->addSeconds(30), new SendEmailNotification($data));

        return Task::create($data) ? true : false;
    }

    private function registerTaskIA(): array
    {
        return (new GenerateTaskDataIA())->generateDataIA($this->request->all());
    }
}
