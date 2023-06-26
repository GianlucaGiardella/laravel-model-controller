@extends('layouts.base')


@section('content')
    <h1>Movies</h1>
    <ul>
        @foreach ($collMovies as $movie)
        <li>{{ $movie->title }}</li>
        @endforeach
    </ul>
@endsection