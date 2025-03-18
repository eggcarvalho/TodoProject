<?php

namespace App\Http\Controllers\Task;

use App\Services\Task\DeleteTaskService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DeleteTaskController extends Controller
{
    public function index($taskid)
    {

        try {
            new DeleteTaskService($taskid);

            return redirect()->route('home')->with('success', 'Tarefa removida com sucesso.');
        } catch (\Exception $e) {
            return back()->with('error', 'Ocorreu um erro ao remover uma tarefa.');
        }
    }
}
