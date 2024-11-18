@extends('layout.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Takenlijst</h1>

    <!-- Knop voor nieuwe taak -->
    <a href="{{ route('tasks.create') }}" class="btn btn-primary mb-3">Nieuwe taak toevoegen</a>

    <!-- Controleer of er taken zijn -->
    @if($tasks->count() > 0)
        <ul class="list-group">
            @foreach ($tasks as $task)
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="flex-grow-1">
                        <h5 class="mb-1"><strong>{{ $task->title }}</strong></h5>
                        
                        <!-- Beschrijving van de taak -->
                        <p class="mb-2 text-muted">
                            {{ $task->description ?? 'Geen beschrijving beschikbaar.' }}
                        </p>

                        <!-- Badge voor voltooide taak -->
                        @if($task->completed)
                            <span class="badge bg-success">Voltooid</span>
                        @endif
                    </div>

                    <div class="d-flex align-items-center">
                        <!-- Bewerken knop -->
                        <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-warning btn-sm me-2">Bewerken</a>

                        <!-- Verwijderen knop -->
                        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Verwijderen</button>
                        </form>

                        <!-- Voltooien knop (alleen als de taak niet voltooid is) -->
                        @if(!$task->completed)
                            <form action="{{ route('tasks.completed', $task->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-success btn-sm">Voltooien</button>
                            </form>
                        @endif
                    </div>
                </li>
            @endforeach
        </ul>
    @else
        <div class="alert alert-info">Geen taken gevonden. Voeg een nieuwe taak toe!</div>
    @endif
</div>
@endsection