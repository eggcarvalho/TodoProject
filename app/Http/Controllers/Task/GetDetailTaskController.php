<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Services\Task\GetDetailTaskService;

class GetDetailTaskController extends Controller
{
    public function index($taskid)
    {
        try {
            $task = (new GetDetailTaskService())->getDetail($taskid);


            sleep(1);
            return response()->json([
                'status' => true,
                'message' => 'Tarefa encontrada',
                'data' => $task
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => true,
                'message' => 'Tarefa não encontrada',
            ], 500);
        }
    }
}
