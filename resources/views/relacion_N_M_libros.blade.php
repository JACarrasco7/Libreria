@extends('layout.layout')

@section('content')

<!-- Page Content -->
<div class="container">

    <h1 class="mt-4">Relacion N:M Autores/Libros</h1>

    @foreach ($books as $book)


    <div class="row mt-3">
        <div class="col-12">
            <button disabled class="btn btn-outline-primary">Libro: {{ $book->titulo }}</button>
            <ul class="mt-3">
                @foreach ($book->users as $user)
                <li> <b>Autor:</b>{{ $user->name }}</li>
                @endforeach
            </ul>
        </div>
    </div>

    @endforeach


</div>
<!-- /.container -->


@stop