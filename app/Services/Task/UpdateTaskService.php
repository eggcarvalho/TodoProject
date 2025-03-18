<?php

namespace App\Services\Task;

use App\Models\Task;
use App\Services\Services;
use Illuminate\Http\Request;


class UpdateTaskService extends Services
{
    public function __construct(private array $data, private int $taskid)
    {
        $this->updateTask();
    }

    private function updateTask()
    {

        Task::findOrFail($this->taskid)->update($this->data);
    }
}
