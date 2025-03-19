<?php

namespace App\Services\Task;

use App\Models\Task;
use App\Mail\SendEmailNotification;
use Illuminate\Support\Facades\Mail;
use App\Services\Task\GenerateTaskDataIA;

class RegisterTaskService
{
    public function __construct(private array $data) {}

    public function generateTaskObject(): Task
    {
        $data = $this->data;

        $data =  $data['decideIA'] == 'true' ? $this->registerTaskIA() : $data;

        Mail::to('teste@gmail.com')->later(now()->addSeconds(30), new SendEmailNotification($data));

        $data['status'] = 'in-progress';
        return Task::create($data);
    }

    private function registerTaskIA(): array
    {
        return (new GenerateTaskDataIA())->generateDataIA($this->data);
    }
}
