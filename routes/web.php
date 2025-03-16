<?php

use App\Http\Controllers\List\GetListController;
use Illuminate\Support\Facades\Route;

Route::get('/', [GetListController::class, 'index'])->name('home');
