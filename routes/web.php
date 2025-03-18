<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Task\GetListController;
use App\Http\Controllers\Task\RegisterTaskController;


Route::get('/', [GetListController::class, 'index'])->name('home');
Route::post('/', [RegisterTaskController::class, 'index'])->name('store');
