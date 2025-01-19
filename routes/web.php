<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisteredUserController;



Route::view('/', 'home');

// route to fetch all tasks from database but limited to showing 5 results
Route::get('/tasks', [TaskController::class, 'index']);

// route to create a task
Route::get('/tasks/create', [TaskController::class, 'create']);

// route to receive create task input field from form
Route::post('/tasks', [TaskController::class, 'store'])->middleware('auth');

// route to fetch respective task from database using id of the task
Route::get('/tasks/{id}', [TaskController::class, 'show']);

// route to edit a task
Route::get('/tasks/{task}/edit', [TaskController::class, 'edit'])->middleware('auth', 'can:edit-task,task');

// route to update a task
Route::patch('/tasks/{id}', [TaskController::class, 'update']);

// route to delete a task
Route::delete('/tasks/{id}', [TaskController::class, 'destroy']);

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', [RegisteredUserController::class, 'create']);

Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create'])->name('login');

Route::post('/login', [SessionController::class, 'store']);

Route::get('/logout', [SessionController::class, 'destroy']);
