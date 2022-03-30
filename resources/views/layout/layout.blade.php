<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Home - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9ddc010bf9.js" crossorigin="anonymous"></script>

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/blog-home.css') }}" rel="stylesheet">
    <link href="{{ asset('css/buscador.css') }}" rel="stylesheet">

</head>



<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">ORM Eloquent</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">Consultas</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ route('all') }}">Listado categorias borrado y buscador</a>
                            <a class="dropdown-item" href="{{ route('categorias') }}">Listado categorias</a>
                            <a class="dropdown-item" href="{{ route('categorias_doesntHave') }}">Listado categorias sin
                                libros</a>
                            <a class="dropdown-item" href="{{ route('categorias_estado') }}">Listado categorias
                                estado</a>
                            <a class="dropdown-item" href="{{ route('categorias_finalizado') }}">Listado categorias
                                finalizado</a>
                            <a class="dropdown-item" href="{{ route('relacion_N_M') }}">Relacion N:M</a>
                            <a class="dropdown-item" href="{{ route('relacion_N_M_libros') }}">Relacion N:M libros</a>
                            <a class="dropdown-item" href="{{ route('relacion_N_M_autores_titulacion_nota') }}">Listado
                                de Autores, libros y notas</a>
                            <a class="dropdown-item" href="{{ route('QB_consulta1') }}">QB consulta 1 </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
        </div>
        <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/typeahead.bundle.min.js') }}"></script>
    <script>
        $(function(){
    // constructs the suggestion engine
var books = new Bloodhound({
  datumTokenizer: Bloodhound.tokenizers.whitespace,
  queryTokenizer: Bloodhound.tokenizers.whitespace,
  // `states` is an array of state names defined in "The Basics"
  prefetch: '{{ url("/books/json") }}'
// local: ['jose', 'ismael']
});

$('#bloodhound .typeahead').typeahead({
  hint: true,
  highlight: true,
  minLength: 1
},
{
  name: 'books',
  source: books
});
});
    </script>

</body>

</html>