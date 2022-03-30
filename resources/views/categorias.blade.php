@extends('layout.layout')

@section('content')

<!-- Page Content -->
<div class="container">

    <h1 class="mt-4">Listado de Categorias/Productos</h1>

    @foreach ($categories as $category)

    <div class="row mt-3">
        <div class="col-12">
            <button disabled class="btn btn-outline-primary">Categoria: {{ $category->nombre }}</button>
            <button disabled class="btn btn-outline-danger">Total: {{ $category->NumBooks }} libros</button>
            <ul class="mt-3">
                @foreach ($category->books as $book)
                <li><b>{{ $book->titulo }} </b>{{ $book->descripcion }}</li>
                @endforeach
            </ul>
        </div>
    </div>

    @endforeach


</div>
<!-- /.container -->


@stop