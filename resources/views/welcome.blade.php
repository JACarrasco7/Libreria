@extends('layout.layout')

@section('content')


<!-- Page Content -->
<div class="container">

    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif

    <div class="mt-5">
        <h1>Consulta: Borrado multiple - Método: DESTROY</h1>


        <div class="row">
            <div class="col-6">
                <h5>Normal</h5>
                <form action="" method="GET" class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Buscar..." aria-label="Search"
                        name="search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit"> <i class="fa fa-search"
                            aria-hidden="true"></i> Buscar</button>
                    @if (isset($_GET['search']) and $_GET['search'] != "")
                    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Ver todo</button>
                    @endif
                </form>
            </div>
            <div class="col-6">

                <h5>Predictivo</h5>
                <form action="" method="GET" class="form-inline">
                    <div id="bloodhound">
                        <input class="form-control mr-sm-2 typeahead" type="text" placeholder="Buscar..."
                            aria-label="Search" name="search">
                    </div>
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit"> <i class="fa fa-search"
                            aria-hidden="true"></i> Buscar</button>
                    @if (isset($_GET['search']) and $_GET['search'] != "")
                    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Ver todo</button>
                    @endif
                </form>
            </div>
        </div>




        <h5>hay {{ $total }} libros en este momento</h5>
        <table class="table table-hover mt-3">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <form action="{{ url('destroy') }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    @foreach ($books as $id => $book)
                    <tr>
                        <th scope="row">{{ $book->id }}</th>
                        <td>{{ $book->titulo }}</td>
                        <td>
                            <input type="checkbox" name="ids[]" value="{{ $book->id }}">
                        <td>
                    </tr>
                    @endforeach
                    <button type="submit" class="btn btn-primary">Borrar</button>
                </form>
            </tbody>
        </table>
    </div>
    <!-- /.row -->

    <div>
        {{ $books->links() }}
    </div>

</div>
<!-- /.container -->


@stop