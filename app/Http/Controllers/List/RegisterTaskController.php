<?php

namespace App\Http\Controllers\List;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterTaskController extends Controller
{
    public function index(Request $request)
    {
        dd($request->all());
    }
}
