@extends('layout.layout')

@section('content')

<!-- Page Content -->
<div class="container">

    <h1 class="mt-4">Relacion N:M Autores/Libros</h1>

    {!! Form::model($user, ['route' => ['putEditManyToMany', $user->id], 'method' => 'PUT']) !!}
    <h2>Libres de: {{ $user->name }}</h2>

    <div class="form-group">
        {!! Form::select('my_books[]', $books, null, ['multiple', 'class' => 'form-control col-md-6', 'size' => 20]) !!}
    </div>

    {!! Form::submit('Guardar', ['class' => 'btn btn-dark mb-5']) !!}
    {!! Form::close() !!}
</div>
<!-- /.container -->


@stop