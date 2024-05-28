@extends('layout')

@section('content')
    <h1>Edit Internaute</h1>
    <form action="{{ route('internautes.update', $internaute->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nom">Nom:</label>
            <input type="text" name="nom" id="nom" class="form-control" value="{{ $internaute->nom }}">
        </div>
        <div class="form-group">
            <label for="prenom">Prenom:</label>
            <input type="text" name="prenom" id="prenom" class="form-control" value="{{ $internaute->prenom }}">
        </div>
        <div class="form-group">
            <label for="adresse">Adresse:</label>
            <input type="text" name="adresse" id="adresse" class="form-control" value="{{ $internaute->adresse }}">
        </div>
        <div class="form-group">
            <label for="date_naissance">Date de Naissance:</label>
            <input type="date" name="date_naissance" id="date_naissance" class="form-control" value="{{ $internaute->date_naissance }}">
        </div>
        <div class="form-group">
            <label for="cin">CIN:</label>
            <input type="text" name="cin" id="cin" class="form-control" value="{{ $internaute->cin }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
