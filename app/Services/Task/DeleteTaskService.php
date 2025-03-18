<?php

namespace App\Services\Task;

use App\Models\Task;
use App\Services\Services;

class DeleteTaskService extends Services
{

    public function __construct($taskId)
    {
        $this->deleteTask($taskId);
    }


    private function deleteTask($taskId)
    {
        Task::findOrFail($taskId)->delete();
    }
}
