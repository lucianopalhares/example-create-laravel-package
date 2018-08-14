<?php

namespace Lucianopalhares\Rexfilials\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Lucianopalhares\Rexfilials\Entities\Task;

class TodolistController extends Controller
{
    public function index()
    {
        return redirect()->route('task.create');
    }

    public function create()
    {
        $tasks = Task::all();
        $submit = 'Add';
        return view('lucianopalhares.rexfilials.list', compact('tasks', 'submit'));
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Task::create($input);
        return redirect()->route('task.create');
    }

    public function edit($id)
    {
        $tasks = Task::all();
        $task = $tasks->find($id);
        $submit = 'Update';
        return view('lucianopalhares.rexfilials.list', compact('tasks', 'task', 'submit'));
    }

    public function update($id)
    {
        $input = Request::all();
        $task = Task::findOrFail($id);
        $task->update($input);
        return redirect()->route('task.create');
    }

    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();
        return redirect()->route('task.create');
    }
}
