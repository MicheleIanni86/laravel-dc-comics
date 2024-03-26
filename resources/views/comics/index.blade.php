@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('main-content')
  <section>
    <div class="container py-4">
      <h1>Lista Fumetti!</h1>

      <table class="table">
        <thead>
            <tr>
                <th>title</th>
                <th>description</th>
                <th>thumb</th>
                <th>price</th>
                <th>series</th>
                <th>sale_date</th>
                <th>type</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($comics as $comic)
            <tr>
                <td>{{ $comic->title }}</td>
                <td>{{ $comic->description }}</td>
                <td>{{ $comic->thumb }}</td>
                <td>{{ $comic->price }}</td>
                <td>{{ $comic->series }}</td>
                <td>{{ $comic->sale_date }}</td>
                <td>{{ $comic->type }}</td>

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