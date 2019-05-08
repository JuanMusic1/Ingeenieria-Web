@extends('layout.main')


@section('content')
<h1>Mis tareas</h1>
<ul>
    @foreach ($tareas as $tarea)
        <li> <a href="/tasks/{{$tarea->id }}">{{$tarea->title}}</a></li>
    @endforeach
</ul>
@endsection
