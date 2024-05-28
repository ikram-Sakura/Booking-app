@extends('layout')

@section('content')
    <h1>Add Internaute</h1>
    <form action="{{ route('internautes.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nom">Nom:</label>
            <input type="text" name="nom" id="nom" class="form-control">
        </div>
        <div class="form-group">
            <label for="prenom">Prenom:</label>
            <input type="text" name="prenom" id="prenom" class="form-control">
        </div>
        <div class="form-group">
            <label for="adresse">Adresse:</label>
            <input type="text" name="adresse" id="adresse" class="form-control">
        </div>
        <div class="form-group">
            <label for="date_naissance">Date de Naissance:</label>
            <input type="date" name="date_naissance" id="date_naissance" class="form-control">
        </div>
        <div class="form-group">
            <label for="cin">CIN:</label>
            <input type="text" name="cin" id="cin" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
