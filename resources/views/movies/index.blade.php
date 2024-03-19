@extends('layouts.app')

@section('title', 'Movie List')

@section('main-content')
  <section>
    <div class="container py-4">
      <div class="row g-3">
        @forelse($movies as $movie)
        <div class="col-4">
            <div class="card">
                <div class="card-header">{{$movie->title}}</div>
                <div class="card-body">
                    <a href="{{route('movies.show', $movie)}}">Più dettagli...</a>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12">
            <h1>Film non trovati</h1>
        </div>
        @endforelse
      </div>
    </div>
  </section>
@endsection
