@extends('layouts.app')

@section('title', 'Crea nuovo fumetto')

@section('main-content')
  <section>
    <div class="container py-4">
      <h1>Crea nuovo fumetto</h1>
      <form action="{{ route('comics.store') }}" method="POST">
        @csrf

        <div class="row mt-4">
            <div class="col-3">
                <label for="title" class="form-label">Titolo</label>
                <input class="form-control" id="title" name="title" type="text" max="100"/>
            </div>
            <div class="col-3">
                <label for="thumb" class="form-label">Url Immagine</label>
                <input class="form-control" id="thumb" name="thumb" type="url"/>
            </div>
            <div class="col-3">
                <label for="price" class="form-label">Prezzo</label>
                <input class="form-control" id="price" name="price" type="text"/>
            </div>
            <div class="col-3">
                <label for="series" class="form-label">Serie</label>
                <input class="form-control" id="series" name="series" type="text"/>
            </div>
        </div>
        
        <div class="row mt-3">
            <div class="col-9">
                <label for="description" class="form-label">Descrizione</label>

                <textarea class="form-control" name="description" id="description" rows="1"></textarea>

            </div>
            <div class="col-3">
                <label for="series" class="form-label">Tipo/Stile</label>
                <select class="form-select" name="type" id="type">
                    <option value="comic book">Comic Book</option>
                    <option value="graphic novel">Graphic Novel</option>
                </select>
            </div>
            
        </div>
        <div class="mt-3">
            <button class="btn btn-success"><i class="fa-regular fa-floppy-disk"></i> Salva</button>
        </div>
        
        


    </form>

    <div class="text-end">
        <a class="btn btn-primary my-4 text-end" href="{{ route('comics.index') }}"><i class="fa-solid fa-left-long"></i> Torna Indietro</a>
    </div>
    </div>
  </section>
@endsection

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection