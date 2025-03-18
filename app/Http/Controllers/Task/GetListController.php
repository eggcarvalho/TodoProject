<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Services\Task\GetListTaskService;
use App\Services\Responsibles\GetListResponsibleService;

class GetListController extends Controller
{
    public function index()
    {
        $responsibles = (new GetListResponsibleService)->getResponsibles();
        $tasks = (new GetListTaskService())->getList();

        return view('home', compact('tasks', 'responsibles'));
    }
}
