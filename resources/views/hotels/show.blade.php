@extends('layout')

@section('content')
    <h1>Show Hotel</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $hotel->titre }}</h5>
            <p class="card-text">Adresse: {{ $hotel->adresse }}</p>
            <p class="card-text">Prix Unitaire: {{ $hotel->prix_unitaire }}</p>
            <p class="card-text">Type Chambre: {{ $hotel->type_chambre }}</p>
            <a class="btn btn-primary" href="{{ route('hotels.index') }}">Back</a>
        </div>
    </div>
@endsection
