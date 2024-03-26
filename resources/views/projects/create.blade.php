<!-- resources/views/projects/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Adauga</h2>
        <form action="{{ route('projects.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nume:</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="description">Descriere:</label>
                <textarea class="form-control" id="description" name="description"></textarea>
            </div>
            <div class="form-group">
                <label for="status">Stare:</label>
                <select class="form-control" id="status" name="status">
                    <option value="draft">Draft</option>
                    <option value="In progress">In curs de dezvoltare</option>
                    <option value="Completed">Finalizat</option>
                </select>
            </div>
            <div class="form-group">
                <label for="start_date">Data de incepere:</label>
                <input type="date" class="form-control" id="start_date" name="start_date">
            </div>
            <button type="submit" class="btn btn-primary">Salveaza</button>
        </form>
    </div>
@endsection
