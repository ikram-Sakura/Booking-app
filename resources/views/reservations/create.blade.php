@extends('layout')

@section('content')
    <h1>Add Reservation</h1>
    <form action="{{ route('reservations.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="id_internaute">Internaute:</label>
            <select name="id_internaute" id="id_internaute" class="form-control">
                @foreach($internautes as $internaute)
                    <option value="{{ $internaute->id }}">{{ $internaute->nom }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="id_hotel">Hotel:</label>
            <select name="id_hotel" id="id_hotel" class="form-control">
                @foreach($hotels as $hotel)
                    <option value="{{ $hotel->id }}">{{ $hotel->titre }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="date_debut_sejour">Date Debut Sejour:</label>
            <input type="date" name="date_debut_sejour" id="date_debut_sejour" class="form-control">
        </div>
        <div class="form-group">
            <label for="date_fin_sejour">Date Fin Sejour:</label>
            <input type="date" name="date_fin_sejour" id="date_fin_sejour" class="form-control">
        </div>
        <div class="form-group">
            <label for="titre">Titre:</label>
            <input type="text" name="titre" id="titre" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
