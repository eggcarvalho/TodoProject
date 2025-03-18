<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\List\GetListController;
use App\Http\Controllers\List\RegisterTaskController;

Route::get('/', [GetListController::class, 'index'])->name('home');
Route::post('/', [RegisterTaskController::class, 'index'])->name('store');
