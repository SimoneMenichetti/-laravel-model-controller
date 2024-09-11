@extends('layouts.main')

@section('content')
    <div class="container my-5">
        <h1>I miei Film</h1>

        @foreach ($movies as $movie)
            <div class="card" style="width: 18rem;">
                {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
                <div class="card-body">
                    <h5 class="card-title">{{ $movie->id }}</h5>
                    <p class="card-text">{{ $movie->original_title }}
                        <a href="{{ route('movies.show', $movie->id) }}" class="btn btn-primary">Go details</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
