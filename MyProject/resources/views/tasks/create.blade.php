@extends('layout.main')

@section('content')
<h1>Crear tareas</h1>

<form action="/tasks" method="post">
    @csrf
    <div class="form-group">
        <label for="title">Titulo</label>
        <input type="text" name="title" id="title" class="form-content" placeholder="Ingrese el nombre de su tarea" value="{{old('title')}}">
    </div>
    <div class="form-group">
            <label for="title">Descripcion</label>
            <textarea type="text" name="description" id="description" class="form-content" rows="5">{{old('description')}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Crear</button>
</form>
@endsection
