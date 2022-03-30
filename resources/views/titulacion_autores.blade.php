@extends('layout.layout')

@section('content')

<!-- Page Content -->
<div class="container">

    <h1 class="mt-4">Relacion N:M Autores/Libros</h1>

    @foreach ($users as $user)

    <div class="row mt-3">
        <div class="col-12">
            <button disabled class="btn btn-outline-primary">Autor: {{ $user->name }}</button>
            <ul class="mt-3">
                @foreach ($user->qualifications as $qualification)
                <li><b>{{ $qualification->titulo }}: </b>{{ $qualification->pivot->nota }}</li>
                @endforeach
            </ul>
        </div>
    </div>

    @endforeach


</div>
<!-- /.container -->


@stop