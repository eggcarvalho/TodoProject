<?php

namespace App\Http\Controllers\List;

use App\Http\Controllers\Controller;
use App\Services\List\GetListTaskService;
use App\Services\Responsibles\GetListResponsibleService;
use Illuminate\Http\Request;

class GetListController extends Controller
{
    public function index()
    {
        $responsibles = (new GetListResponsibleService)->getResponsibles();
        $tasks = (new GetListTaskService())->getList();

        return view('home', compact('tasks', 'responsibles'));
    }
}
