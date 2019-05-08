@extends('layout.main')

@section('content')
<h1>{{$task->title}}</h1>
<p>{{$task->description}}</p>
<a name="" id="" class="btn btn-primary" href="/tasks/{{$task->id}}/edit" role="button">Editar</a>
<form action="/tasks/{{$task->id}}" method="POST">
    @csrf
    @method('delete')

    <button type="submit" class="btn btn-primary">Eliminar</button>

</form>
@endsection
