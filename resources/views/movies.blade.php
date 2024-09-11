@extends('layouts.main')

@section('content')
    <div class="container my-5">
        <h1 class=" text-white">I miei Film</h1>
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-md-4 mb-4"> <!-- Usa col-md-4 per 3 card per riga su schermi medi e più grandi -->
                    <div class="card" style="width: 100%;">
                        {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
                        <div class="card-body bg-dark">
                            <h5 class="card-id text-white">{{ $movie->id }}</h5>
                            <p class="card-text text-white">{{ $movie->original_title }}</p>
                            <a href="{{ route('movies.show', $movie->id) }}" class="btn btn-primary">Go Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
