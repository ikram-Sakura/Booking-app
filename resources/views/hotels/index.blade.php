@extends('layout')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Hotels</h1>
        <a class="btn btn-primary" href="{{ route('hotels.create') }}">Add Hotel</a>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titre</th>
                <th>Adresse</th>
                <th>Prix Unitaire</th>
                <th>Type Chambre</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($hotels as $hotel)
                <tr>
                    <td>{{ $hotel->id }}</td>
                    <td>{{ $hotel->titre }}</td>
                    <td>{{ $hotel->adresse }}</td>
                    <td>{{ $hotel->prix_unitaire }}</td>
                    <td>{{ $hotel->type_chambre }}</td>
                    <td>
                        <a class="btn btn-info btn-sm" href="{{ route('hotels.show', $hotel->id) }}">Show</a>
                        <a class="btn btn-warning btn-sm" href="{{ route('hotels.edit', $hotel->id) }}">Edit</a>
                        <form action="{{ route('hotels.destroy', $hotel->id) }}" method="POST" style="display:inline-block;">
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
