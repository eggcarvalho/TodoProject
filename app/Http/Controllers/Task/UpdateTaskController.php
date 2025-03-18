<?php

namespace App\Http\Controllers\Task;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Task\UpdateTaskService;

class UpdateTaskController extends Controller
{
    public function index(Request $request, $taskid)
    {
        try {
            new UpdateTaskService($request, $taskid);

            return response()->json(data: [
                'status' => true,
                'message' => "Task alterada com sucesso.",
            ]);
        } catch (\Exception $e) {

            return response()->json([
                'status' => false,
                'message' => "Falha ao salvar a tarefa: " . $e->getMessage()
            ], 500);
        }
    }
}
