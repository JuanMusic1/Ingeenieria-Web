<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    public function index()
    {
        $tareas = Task::all();

        return view('tasks.index')->with(["tareas" => $tareas]);
    }
    public function create()
    {

        return view('tasks.create');
    }
    public function store()
    {
        $data = request()->validate([
            'title' => 'required|max:25|min:3',
            'description' => 'required|min:10'
        ]);
        //Task::create($data);
        //Task::create(request(['title', 'description']));
        auth()->user()->tasks()->create($data);
        return redirect('/tasks');
    }

    public function show (Task $task){
        //$task=Task::findOrfail($id);
        return view('tasks.show')->with(["task" => $task]);
    }

    public function edit (Task $task){
        //$task=Task::findOrfail($id);
        return view('tasks.edit')->with(["task" => $task]);
    }
    public function update (Task $task){
        $task->update(request(['title', 'description']));

        return redirect('/tasks');
    }
    public function destroy (Task $task){
        $task->delete();

        return redirect('/tasks');
    }
}
