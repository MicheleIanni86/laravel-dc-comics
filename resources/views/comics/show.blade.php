@extends('layouts.app')

@section('title', "Dettaglio Fumetto $comic->id: $comic->name");

@section('main-content')

<section>
    <div class="container">

      <h1 class="mb-5 mt-3">Dettaglio Fumetto: <strong>{{ $comic->title }}</strong></h1>
    
    <div class="row">
        <div class="col-2">
            <img src="{{ $comic->thumb }}" class="img-fluid" alt="">
        </div>
        <div class="col-10">
            <h2 class="h3">Descrizione</h2>
            <p>{{ $comic->description }}</p>

            <div class="row text-center mt-5">
                <div class="col-3">
                    <h2 class="h5">Prezzo</h2>
                    <p class="fw-bold">{{ $comic->price }}</p>          
                </div>
                <div class="col-3">
                    <h2 class="h5">Serie</h2>
                    <p class="fw-bold">{{ $comic->series }}</p>       
                </div>
                <div class="col-3">
                    <h2 class="h5">Data Uscita</h2>
                    <p class="fw-bold">{{ $comic->sale_date }}</p>       
                </div>
                <div class="col-3">
                    <h2 class="h5">Tipo</h2>
                    <p class="fw-bold">{{ $comic->type }}</p>       
                </div>
            </div>
        </div>
        
        <div class="text-end">
            <a class="btn btn-primary my-4 text-end" href="{{ route('comics.index') }}"><i class="fa-solid fa-left-long"></i> Torna Indietro</a>
        </div>
    </div>
    
    </div>
</section>

@endsection

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection