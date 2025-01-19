<?php

namespace App\Http\Controllers;

use App\TaskStatus;
use App\Models\Tasks;
use Illuminate\Validation\Rule;


class TaskController extends Controller
{

    // controller to show all tasks
    public function index()
    {
        $task = Tasks::latest()->simplePaginate(6);

        return view('tasks.index', [
            'tasks' => $task
        ]);
    }

    // controller to create a task
    public function create()
    {
        return view('tasks.create');
    }

    // controller to show a task
    public function show($id)
    {
        $task = Tasks::find($id);
        return view('tasks.show', ['task' => $task]);
    }

    // controller to store the new edited tasks
    public function store()
    {
        // validation
        request()->validate([
            'title' => ['required', 'min:10'],
            'description' => ['required', 'min:50'],
            'status' => ['required', Rule::enum(TaskStatus::class)]
        ]);
        // creation of a task after validation
        Tasks::create([
            'title' => request('title'),
            'description' => request('description'),
            'status' => request('status'),
            'user_id' => 69
        ]);
        // redirect once all above triggers
        return redirect('/tasks');
    }

    // controller to edit a task
    public function edit(Tasks $task)
    {

        // Gate::authorize('edit-job', $task);

        return view('tasks.edit', ['task' => $task]);
    }

    // controller to update a task
    public function update($id)
    {
        // validation
        request()->validate([
            'title' => ['required'],
            'description' => ['required'],
            'status' => ['required', Rule::enum(TaskStatus::class)]
        ]);

        // update the task
        $task = Tasks::findOrFail($id);
        $task->update([
            'title' => request('title'),
            'description' => request('description'),
            'status' => request('status')
        ]);

        // redirect once the update complete
        return redirect("/tasks/" . $task->id);
    }

    // controller to delete
    public function destroy($id)
    {

        // find the task
        $task = Tasks::findOrFail($id);

        // delete the task
        $task->delete();

        // redirect to tasks page
        return redirect("/tasks");
    }
}
