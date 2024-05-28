@extends('layout')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Reservations</h1>
        <a class="btn btn-primary" href="{{ route('reservations.create') }}">Add Reservation</a>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Internaute</th>
                <th>Hotel</th>
                <th>Date Debut Sejour</th>
                <th>Date Fin Sejour</th>
                <th>Titre</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reservations as $reservation)
                <tr>
                    <td>{{ $reservation->id }}</td>
                    <td>{{ $reservation->internaute->nom }}</td>
                    <td>{{ $reservation->hotel->titre }}</td>
                    <td>{{ $reservation->date_debut_sejour }}</td>
                    <td>{{ $reservation->date_fin_sejour }}</td>
                    <td>{{ $reservation->titre }}</td>
                    <td>
                        <a class="btn btn-info btn-sm" href="{{ route('reservations.show', $reservation->id) }}">Show</a>
                        <a class="btn btn-warning btn-sm" href="{{ route('reservations.edit', $reservation->id) }}">Edit</a>
                        <form action="{{ route('reservations.destroy', $reservation->id) }}" method="POST" style="display:inline-block;">
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
