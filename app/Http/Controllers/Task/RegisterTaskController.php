<?php

namespace App\Http\Controllers\Task;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Task\RegisterTaskService;

class RegisterTaskController extends Controller
{
    public function index(Request $request)
    {

        try {
            (new RegisterTaskService($request))->generateTaskObject();

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
