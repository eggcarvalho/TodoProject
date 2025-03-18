<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Services\Task\UpdateStatusTaskService;
use Illuminate\Http\Request;

class UpdateStatusTaskController extends Controller
{
    public function index($taskid)
    {
        try {
            new UpdateStatusTaskService($taskid);

            return redirect()->route('home')->with('success', 'Status da tarefa atualizado com sucesso.');
        } catch (\Exception $e) {
            return back()->with('error', 'Ocorreu um erro ao atualizar status da tarefa.');
        }
    }
}
