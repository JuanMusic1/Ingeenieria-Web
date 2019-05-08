@extends('layout.main')

@section('content')
<h1>Editar tareas</h1>
<form action="/tasks/{{$task->id}}" method="post">
    @csrf
    @method('patch')
    <div class="form-group">
        <label for="title">Titulo</label>
        <input type="text" name="title" id="title" class="form-content" placeholder="Ingrese el nombre de su tarea" value="{{$task->title}}">
    </div>
    <div class="form-group">
            <label for="title">Descripcion</label>
            <textarea type="text" name="description" id="description" class="form-content" rows="5" >{{$task->description}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Editar</button>
</form>
@endsection
