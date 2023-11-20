@extends('layout.main')

@section("content")
    <h1>titolo film</h1>
    <div class="container d-flex flex-wrap">

        @foreach ($movies as $movie )

        <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">{{ $movie->title }}</h5>
              <h6 class="card-subtitle mb-2 text-body-secondary">{{ $movie->original_title }}</h6>
              <p class="card-text">Nationality: {{ $movie->nationality }} </p>
              <p class="card-text">Vote: {{ $movie->vote }}</p>
              <p class="card-text">Date: {{ $movie->date }}</p>

            </div>
        </div>

        @endforeach

    </div>

@endsection
