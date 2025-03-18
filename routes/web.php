<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Task\GetListController;
use App\Http\Controllers\Task\DeleteTaskController;
use App\Http\Controllers\Task\GetDetailTaskController;
use App\Http\Controllers\Task\RegisterTaskController;
use App\Http\Controllers\Task\UpdateStatusTaskController;

Route::get('/', [GetListController::class, 'index'])->name('home');
Route::post('/', [RegisterTaskController::class, 'index'])->name('store');
Route::get('/{taskid}', [GetDetailTaskController::class, 'index'])->name('get');
Route::put('/{taskid}', [UpdateStatusTaskController::class, 'index'])->name('updateStatus');
Route::delete('/{taskid}', [DeleteTaskController::class, 'index'])->name('delete');
