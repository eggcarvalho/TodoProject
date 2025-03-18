<?php

namespace App\Services\Task;

use App\Models\Task;
use App\Services\Services;

class UpdateStatusTaskService extends Services
{

    public function __construct($taskid)
    {
        $this->updateStatus($taskid);
    }

    private function updateStatus($taskid)
    {
        $status = Task::findOrFail($taskid)->status;

        switch ($status) {
            case 'in-progress':
                $status = 'done';
                break;
            case 'done':
                $status = 'in-progress';
                break;
        }

        Task::findOrFail($taskid)->update(['status' => $status]);
    }
}
