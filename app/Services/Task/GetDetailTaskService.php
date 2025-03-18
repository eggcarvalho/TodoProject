<?php

namespace App\Services\Task;

use App\Models\Task;
use App\Services\Services;


class GetDetailTaskService extends Services
{

    public function getDetail($taskid)
    {
        return Task::with('responsible')->findOrFail($taskid);
    }
}
