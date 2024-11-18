@extends('layout.app')

@section('content')
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
        <a class="navbar-brand" href="{{ route('tasks.index') }}">Takenlijst</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('tasks.index') }}">Alle Taken</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('tasks.create') }}">Nieuwe Taak</a>
                </li>
            </ul>
        </div>
    </nav>

    <h1 class="mb-4">Nieuwe taak aanmaken</h1>
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titel</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Voer de titel van de taak in" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Beschrijving</label>
            <textarea class="form-control" id="description" name="description" rows="4" placeholder="Optionele beschrijving van de taak"></textarea>
        </div>
        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-primary">Opslaan</button>
            <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Annuleren</a>
        </div>
    </form>
</div>
@endsection