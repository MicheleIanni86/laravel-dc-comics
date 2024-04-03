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
                <th></th>
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
                <td><a href="{{ route('comics.edit', $comic) }}"><i class="fa-solid fa-pen"></i></a></td>

                <td class="p-0"><button class="btn btn-link p-0 pt-2 ps-2" data-bs-toggle="modal" data-bs-target="#delete-comic-{{ $comic->id }}-modal">
                  <i class="fa-solid fa-trash-can text-danger"></i>
                </button>

                
                </td>


                {{-- <td class="pt-1 ps-2">
                  <form action="{{ route('comics.destroy', $comic) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-link p-0">
                      <i class="fa-solid fa-trash-can text-danger"></i>
                    </button>
                  </form>
                </td> --}}
                
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

@section('modal')
  @foreach ($comics as $comic)
  <div class="modal fade" id="delete-comic-{{ $comic->id }}-modal" tabindex="-1" aria-labelledby="delete-comic-{{ $comic->id }}-modal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina Fumetto {{ $comic->title }}</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Sei sicuro di voler cancellare questo fumetto?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Non Cancellare</button>
          <form action="{{ route('comics.destroy', $comic) }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">
              Si Cancella
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
  @endforeach
@endsection

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection