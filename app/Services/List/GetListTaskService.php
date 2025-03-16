<?php

namespace App\Services\List;

use App\Models\Task;
use App\Services\Services;


class GetListTaskService extends Services
{
    public function __construct() {}



    public function getList()
    {
        $tasks = Task::get();


        return $tasks;
    }
}
