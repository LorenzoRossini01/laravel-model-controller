@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('main-content')
  <section>
    <div class="container py-4">
    <div class="card">
                <div class="card-header">{{$movie->title}}</div>
                <div class="card-body">
                    <p><b>Titolo originale: </b>{{$movie->original_title}}</p>
                    <p><b>Nazionalità: </b>{{$movie->nationality}}</p>
                    <p><b>Data di uscita: </b>{{$movie->date}}</p>
                    <p><b>Valutazione: </b>{{$movie->vote}}</p>
                </div>
            </div>
    </div>
  </section>
@endsection
