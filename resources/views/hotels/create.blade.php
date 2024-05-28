@extends('layout')

@section('content')
    <h1>Add Hotel</h1>
    <form action="{{ route('hotels.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="titre">Titre:</label>
            <input type="text" name="titre" id="titre" class="form-control">
        </div>
        <div class="form-group">
            <label for="adresse">Adresse:</label>
            <input type="text" name="adresse" id="adresse" class="form-control">
        </div>
        <div class="form-group">
            <label for="prix_unitaire">Prix Unitaire:</label>
            <input type="text" name="prix_unitaire" id="prix_unitaire" class="form-control">
        </div>
        <div class="form-group">
            <label for="type_chambre">Type Chambre:</label>
            <input type="text" name="type_chambre" id="type_chambre" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
