<!-- resources/views/projects/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Editeaza</h2>
        <form action="{{ route('projects.update', $project->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nume:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $project->name }}">
            </div>
            <div class="form-group">
                <label for="description">Descriere:</label>
                <textarea class="form-control" id="description" name="description">{{ $project->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="status">Stare:</label>
                <select class="form-control" id="status" name="status">
                    <option value="draft" {{ $project->status == 'draft' ? 'selected' : '' }}>Draft</option>
                    <option value="In progress" {{ $project->status == 'In progress' ? 'selected' : '' }}>In curs de dezvoltare</option>
                    <option value="Completed" {{ $project->status == 'Completed' ? 'selected' : '' }}>Finalizat</option>
                </select>
            </div>
            <div class="form-group">
                <label for="start_date">Data de Începere:</label>
                <input type="date" class="form-control" id="start_date" name="start_date" value="{{ $project->start_date }}">
            </div>
            <button type="submit" class="btn btn-primary">Actualizează</button>
        </form>
    </div>
@endsection
