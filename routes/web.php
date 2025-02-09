<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [TaskController::class, 'index']);
Route::post('/assign', [TaskController::class, 'assign']);
Route::resource('tasks', TaskController::class);
