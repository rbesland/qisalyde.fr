@extends('layouts.app')

@section('content')
    <h1>Titre de la page <span>activités</span></h1>

    <div>
        <table>
            <thead>
            <tr>
                <th>Nom</th>
                <th>Description</th>
                <th>Prof</th>
                <th>Activité</th>
                <th>Heure de début</th>
                <th>Heure de fin</th>
            </tr>
            </thead>
            <tbody>
            @foreach($events as $event)
                <tr>
                    <td>{{ $event->name }}</td>
                    <td>{{ $event->description }}</td>
                    <td>{{ $event->teacher->name }}</td>
                    <td>{{ $event->activity->name }}</td>
                    <td>{{ $event->start_at }}</td>
                    <td>{{ $event->end_at }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@endsection
