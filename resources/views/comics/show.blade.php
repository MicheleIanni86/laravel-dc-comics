@extends('layouts.app')

@section('title', "Dettaglio Fumetto $comic->id: $comic->name");

@section('main-content')

<section>
    <div class="container">
      <h1 class="my-5">Dettaglio Fumetto {{ $comic->id }}: {{ $comic->name }}</h1>
    
    <div class="row">
        <div class="col-5">
            <img src="{{ $comic->thumb }}" class="img-fluid" alt="">
        </div>
        <div class="col-7">
            <h2 class="h5">Descrizione</h2>
            <p>{{ $comic->description }}</p>

            <div class="row">
                <div class="col-4">
                    <h2 class="h5">Prezzo</h2>
                    <p>{{ $comic->price }}</p>          
                </div>
                <div class="col-4">
                    <h2 class="h5">Data Uscita</h2>
                    <p>{{ $comic->sale_date }}</p>       
                </div>
                <div class="col-4">
                    <h2 class="h5">Tipo</h2>
                    <p>{{ $comic->type }}</p>       
                </div>
            </div>
        </div>
    </div>
    
    </div>
</section>

@endsection