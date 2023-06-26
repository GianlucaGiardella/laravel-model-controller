@extends('layouts.base')


@section('content')
    <h1 class="text-center text-light mb-4">Movies</h1>
    <div class="row row-cols-4">
        @foreach ($collMovies as $movie)
        <div class="col g-4">
            <div class="card w-100" style="width: 18rem;">
                <div class="card-body bg-secondary-subtle">
                    <h5 class="card-title">{{ $movie->name }}</h5>
                    <p class="card-text">Nazionalità: {{ $movie->nationality }}</p>
                    <p class="card-text">Data di uscita: {{ $movie->date }}</p>
                    <p class="card-text">Voto: {{ $movie->vote }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection