@extends('layout.layout')

@section('content')

<!-- Page Content -->
<div class="container">

    <h1 class="mt-4">Listado de Categorias/Productos</h1>

    @foreach ($categories as $category)

    {{-- {{ dd($category->NumBooksFinalizados) }} --}}

    <div class="row mt-3">
        <div class="col-12">
            <button disabled class="btn btn-outline-primary">Categoria: {{ $category->nombre }}</button>
            <button disabled class="btn btn-outline-danger">Total: {{ $category->NumBooksFinalizados }} libros</button>
            <ul class="mt-3">
                
                @foreach ($category->books as $book)
                @if ($book->estado == 'finalizado')
                <li><b>{{ $book->titulo }} </b>{{ $book->descripcion }} <b>{{ $book->estado }}</b></li>
                @endif
                @endforeach
            </ul>
        </div>
    </div>

    @endforeach


</div>
<!-- /.container -->


@stop