

@extends('layouts.app')

@section('title')
Movies | Charters
@endsection

@section('main_content')
<div class="container">
  <h1>MoViEs:</h1>
  <section class="movies-list">
    
    @foreach ($movies as $movie)
    <div class="movie-card">
      <div class="movie-text">
        <p>TITLE: {{ $movie->title }}</p>
        <p>ORIGINAL TITLE: {{ $movie->original_title }}</p>
        <p>NATIONALITY: {{ $movie->nationality }}</p>
        <p>DATE: {{ $movie->date }}</p>
        <p>VOTE: {{ $movie->vote / 2 }}</p>
      </div>
    </div>
    @endforeach
    
  </section>
  <button>
    <a href="{{ route('home') }}">Torna alla home</a>
  </button>
</div>

@endsection