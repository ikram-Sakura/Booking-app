@extends('layout')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Internautes</h1>
        <a class="btn btn-primary" href="{{ route('internautes.create') }}">Add Internaute</a>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Adresse</th>
                <th>Date de Naissance</th>
                <th>CIN</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($internautes as $internaute)
                <tr>
                    <td>{{ $internaute->id }}</td>
                    <td>{{ $internaute->nom }}</td>
                    <td>{{ $internaute->prenom }}</td>
                    <td>{{ $internaute->adresse }}</td>
                    <td>{{ $internaute->date_naissance }}</td>
                    <td>{{ $internaute->cin }}</td>
                    <td>
                        <a class="btn btn-info btn-sm" href="{{ route('internautes.show', $internaute->id) }}">Show</a>
                        <a class="btn btn-warning btn-sm" href="{{ route('internautes.edit', $internaute->id) }}">Edit</a>
                        <form action="{{ route('internautes.destroy', $internaute->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
