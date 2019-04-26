<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TareasC extends Controller
{
    public function index()
    {
        $tareas = ["Tarea 1", "Tarea 2", "Tarea 3"];
        return view('tareas')->with(['tareas' => $tareas]);
    }
}
