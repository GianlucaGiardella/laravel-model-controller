@extends('layouts.base')


@section('content')
    <h1 class="text-center">Movies</h1>
    <hr>
    <ul class="d-flex flex-wrap row row-cols-4 g-4">
        @foreach ($collMovies as $movie)
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="" class="card-img-top" alt="{{ $movie->name }}">
                <div class="card-body">
                <h5 class="card-title">{{ $movie->name }}</h5>
                <p class="card-text">Nazionalità: {{ $movie->nationality }}</p>
                <p class="card-text">Data di uscita: {{ $movie->date }}</p>
                <p class="card-text">Voto: {{ $movie->vote }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </ul>
@endsection