@extends('layout')

@section('content')
    <h1>Show Internaute</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $internaute->nom }} {{ $internaute->prenom }}</h5>
            <p class="card-text">Adresse: {{ $internaute->adresse }}</p>
            <p class="card-text">Date de Naissance: {{ $internaute->date_naissance }}</p>
            <p class="card-text">CIN: {{ $internaute->cin }}</p>
            <a class="btn btn-primary" href="{{ route('internautes.index') }}">Back</a>
        </div>
    </div>
@endsection
