@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('main-content')
  <section>
    <div class="container py-4">
      <div class="text-start">
        <a class="btn btn-primary my-4" href="{{ route('comics.create') }}">Crea Nuovo Fumetto  <i class="fa-solid fa-plus"></i></a>
    </div>
      <h1 class="text-center mb-5">Lista Fumetti!</h1>

      <table class="table">
        <thead>
            <tr class="text-center">
                <th>ID</th>
                <th>TITOLO</th>    
                <th>PREZZO</th>
                <th>SERIE</th>
                <th>DATA USCITA</th>
                <th>TIPO</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @forelse ($comics as $comic)
            <tr class="text-center">
                <td>{{ $comic->id }}</td>
                <td>{{ $comic->title }}</td>               
                <td>{{ $comic->price }}</td>
                <td>{{ $comic->series }}</td>
                <td>{{ $comic->sale_date }}</td>
                <td>{{ $comic->type }}</td>
                <td><a href="{{ route('comics.show', $comic) }}"><i class="fa-solid fa-eye"></i></a></td>

            </tr>
                
            @empty
                <tr>
                   <td colspan="100%">
                    Nessun Risultato
                    </td> 
                </tr>
            @endforelse
        </tbody>
      </table>
    </div>
  </section>
@endsection

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection