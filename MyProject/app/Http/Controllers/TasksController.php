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
        Task::create(request(['title', 'description']));
        return redirect('/tasks');
    }
}
