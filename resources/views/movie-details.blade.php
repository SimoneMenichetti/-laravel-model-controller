@extends('layouts.main')

@section('content')

    <div class="container my-5">
        <h1 class="text-white">{{ $movie->title }}</h1>
        <p class="text-white">Original Title: {{ $movie->original_title }}</p>
        <p class="text-white">Nationality: {{ $movie->nationality }}</p>
        <p class="text-white">Date: {{ $movie->date }}</p>
        <p class="text-white">Vote: {{ $movie->vote }}</p>

        <a href="{{ route('movies') }}" class="btn btn-secondary">back</a>
    </div>
