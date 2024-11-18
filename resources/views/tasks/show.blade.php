@extends('layout.app')
@section('content')
<div class="container">
    <h1>{{$task->title}}</h1>
    <p>{{$task->descriptons}}</p>
    <a href="{{route('tasks.index')}}" class="btn btn-secondary">Terug naar Takenlijst</a>
</div>
@endsection