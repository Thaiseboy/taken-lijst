@extends('layout.app')

@section('content')
<div class="container">
    <h1>Taak Bewerken</h1>
    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Titel</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $task->title }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Beschrijving</label>
            <textarea name="description" id="description" class="form-control" rows="4">{{ $task->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Bewerken</button>
        <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Annuleren</a>
    </form>
</div>
@endsection