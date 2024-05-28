@extends('layout')

@section('content')
    <h1>Edit Hotel</h1>
    <form action="{{ route('hotels.update', $hotel->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="titre">Titre:</label>
            <input type="text" name="titre" id="titre" class="form-control" value="{{ $hotel->titre }}">
        </div>
        <div class="form-group">
            <label for="adresse">Adresse:</label>
            <input type="text" name="adresse" id="adresse" class="form-control" value="{{ $hotel->adresse }}">
        </div>
        <div class="form-group">
            <label for="prix_unitaire">Prix Unitaire:</label>
            <input type="text" name="prix_unitaire" id="prix_unitaire" class="form-control" value="{{ $hotel->prix_unitaire }}">
        </div>
        <div class="form-group">
            <label for="type_chambre">Type Chambre:</label>
            <input type="text" name="type_chambre" id="type_chambre" class="form-control" value="{{ $hotel->type_chambre }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
