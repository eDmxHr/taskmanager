<?php

use Illuminate\Support\Facades\Route;
use App\Models\Tasks;


Route::get('/', function () {
    return view('home');
});

Route::get('/tasks', function () {
    return view('tasks', [
        'tasks' => Tasks::all()
    ]);
});

Route::get('/tasks/{id}', function ($id) {

    $task = Tasks::find($id);

    return view('task', ['task' => $task]);
});

Route::get('/about', function () {
    return view('about');
});
