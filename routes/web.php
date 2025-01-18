<?php

use Illuminate\Support\Facades\Route;
use App\Models\Tasks;



Route::get('/', function () {
    return view('home');
});

// route to fetch all tasks from database but limited to showing 5 results
Route::get('/tasks', function () {
    return view('tasks.index', [
        'tasks' => Tasks::latest()->simplePaginate(6),
    ]);
});

// route to create a task
Route::get('/tasks/create', function () {
    return view('tasks.create');
});

// route to fetch respective task from database using id of the task
Route::get('/tasks/{id}', function ($id) {
    $task = Tasks::find($id);
    return view('tasks.show', ['task' => $task]);
});

// route to receive create task input field from form
Route::post('/tasks', function () {
    // validation
    request()->validate([
        'title' => ['required', 'min:10'],
        'description' => ['required', 'min:100']
    ]);
    // creation of a task after validation
    Tasks::create([
        'title' => request('title'),
        'description' => request('description'),
        'user_id' => 1
    ]);
    // redirect once all above triggers
    return redirect('/tasks');
});

// route to edit a task
Route::get('/tasks/{id}/edit', function ($id) {
    $task = Tasks::find($id);
    return view('tasks.edit', ['task' => $task]);
});

// route to update a task
Route::patch('/tasks/{id}', function ($id) {
    // validation
    request()->validate([
        'title' => ['required'],
        'description' => ['required']
    ]);

    // authorize
    // update the task
    $task = Tasks::findOrFail($id);
    $task->update([
        'title' => request('title'),
        'description' => request('description'),
    ]);

    // redirect once the update complete
    return redirect("/tasks/" . $task->id);
});

// route to delete a task
Route::delete('/tasks/{id}', function ($id) {
    // authorize on hold
    // find the job
    $task = Tasks::findOrFail($id);

    // delete the job
    $task->delete();

    // redirect to tasks page
    return redirect("/tasks");
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/about', function () {
    return view('about');
});
