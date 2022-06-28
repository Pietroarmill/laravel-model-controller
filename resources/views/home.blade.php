@extends('layouts.app')

@section('main_content')

<div class="container">
  <section class="home">
    <div>
      <h1>CIAO SONO LA PAGINA HOME</h1>
    
      <button>
        <a href="{{ route('movies') }}">Cliccami per visualizzare i film</a>
      </button>
    </div>
  </section>
</div>
@endsection