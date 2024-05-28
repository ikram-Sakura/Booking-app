@extends('layout')

@section('content')
    <h1>Edit Reservation</h1>
    <form action="{{ route('reservations.update', $reservation->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="id_internaute">Internaute:</label>
            <select name="id_internaute" id="id_internaute" class="form-control">
                @foreach($internautes as $internaute)
                    <option value="{{ $internaute->id }}" {{ $reservation->id_internaute == $internaute->id ? 'selected' : '' }}>{{ $internaute->nom }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="id_hotel">Hotel:</label>
            <select name="id_hotel" id="id_hotel" class="form-control">
                @foreach($hotels as $hotel)
                    <option value="{{ $hotel->id }}" {{ $reservation->id_hotel == $hotel->id ? 'selected' : '' }}>{{ $hotel->titre }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="date_debut_sejour">Date Debut Sejour:</label>
            <input type="date" name="date_debut_sejour" id="date_debut_sejour" class="form-control" value="{{ $reservation->date_debut_sejour }}">
        </div>
        <div class="form-group">
            <label for="date_fin_sejour">Date Fin Sejour:</label>
            <input type="date" name="date_fin_sejour" id="date_fin_sejour" class="form-control" value="{{ $reservation->date_fin_sejour }}">
        </div>
        <div class="form-group">
            <label for="titre">Titre:</label>
            <input type="text" name="titre" id="titre" class="form-control" value="{{ $reservation->titre }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
