@extends('layout')

@section('content')
    <h1>Show Reservation</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $reservation->titre }}</h5>
            <p class="card-text">Internaute: {{ $reservation->internaute->nom }}</p>
            <p class="card-text">Hotel: {{ $reservation->hotel->titre }}</p>
            <p class="card-text">Date Debut Sejour: {{ $reservation->date_debut_sejour }}</p>
            <p class="card-text">Date Fin Sejour: {{ $reservation->date_fin_sejour }}</p>
            <a class="btn btn-primary" href="{{ route('reservations.index') }}">Back</a>
        </div>
    </div>
@endsection
