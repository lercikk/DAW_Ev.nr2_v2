<!-- resources/views/projects/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Proiecte</h2>
        <a href="{{ route('projects.create') }}" class="btn btn-primary mb-2">Adauga</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Nume</th>
                    <th>Descriere</th>
                    <th>Stare</th>
                    <th>Data de incepere</th>
                    <th>Actiuni</th>
                </tr>
            </thead>
            <tbody>
                @foreach($projects as $project)
                <tr>
                    <td>{{ $project->name }}</td>
                    <td>{{ $project->description }}</td>
                    <td>{{ $project->status }}</td>
                    <td>{{ $project->start_date }}</td>
                    <td>
                        <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ route('projects.destroy', $project->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
