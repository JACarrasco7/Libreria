@extends('layout.layout')

@section('content')

<!-- Page Content -->
<div class="container">



    {{-- {{ dd($categories) }} --}}



    <h1 class="mt-4">QB consulta 1</h1>

    @foreach ($categories as $category)


    <div class="row mt-3">
        <div class="col-12">
            <button disabled class="btn btn-outline-primary">categoria: {{ $category->categoria }}</button>
            <button disabled class="btn btn-outline-primary">estado: {{ $category->estado }}</button>
            <button disabled class="btn btn-outline-primary">Nº Libros: {{ $category->total }}</button>
            <button disabled class="btn btn-outline-primary">Importe: {{ $category->importe }}</button>
        </div>
    </div>

    @endforeach


</div>
<!-- /.container -->


@stop