<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Task\GetListTaskService;
use App\Services\Responsibles\GetListResponsibleService;

class GetListController extends Controller
{
    public function index(Request $request)
    {

        $queries = [
            'id' => $request->query('numero'),
            'title' => $request->query('titulo'),
            'responsible_id' => $request->query('resp'),
            'status' => $request->query('status'),
        ];


        $responsibles = (new GetListResponsibleService)->getResponsibles();
        $tasks = (new GetListTaskService())->getList($queries);

        return view('home', compact('tasks', 'responsibles', 'queries'));
    }
}
