<?php

namespace App\Http\Controllers\List;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\List\RegisterTaskService;

class RegisterTaskController extends Controller
{
    public function index(Request $request)
    {

        try {
            (new RegisterTaskService($request))->generateTaskObject();

            return redirect()->route('home')->with('success', 'Tarefa registrada com sucesso.');
        } catch (\Exception $e) {

            return back()->with('error', 'Ocorreu um erro ao registrar a tarefa.');
        }
    }
}
