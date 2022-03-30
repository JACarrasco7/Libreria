<?php

namespace App\Http\Controllers;

use App\book;
use App\Category;
use App\User;
use App\Qualification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryController extends Controller
{
    public function all(Request $request)
    {

        if ($request->search != "") {
            $books = book::where("titulo", "like", "%{$request->search}%")->orWhere("descripcion", "like", "%{$request->search}%")->paginate(5);
            $total = book::where("titulo", "like", "%{$request->search}%")->orWhere("descripcion", "like", "%{$request->search}%")->count();
            $books->appends(['search' => $request->search]);
        } else {
            $books = book::paginate(5);
            $total = book::all()->count();
        }

        return view('welcome')->with(compact('books', 'total'));
    }

    public function categorias()
    {
        $categories = Category::has('books')->get();
        return view('categorias')->with(compact('categories'));
    }

    public function categorias_doesntHave()
    {
        $categories = Category::doesntHave('books')->get();
        return view('categorias_doesntHave')->with(compact('categories'));
    }

    public function categorias_estado()
    {
        $categories = Category::WhereHas('books', function ($query) {
            $query->where('estado', 'finalizado');
        })->get();

        return view('categorias_estado')->with(compact('categories'));
    }

    public function categorias_finalizado()
    {
        $categories = Category::WhereHas('books', function ($query) {
            $query->where('estado', 'finalizado');
        })->get();

        return view('categorias_finalizado')->with(compact('categories'));
    }

    public function relacion_N_M()
    {
        $users = User::has('books')->get();
        return view('relacion_N_M')->with(compact('users'));
    }

    public function relacion_N_M_libros()
    {
        $books = book::has('users')->get();
        return view('relacion_N_M_libros')->with(compact('books'));
    }

    public function relacion_N_M_autores_titulacion_nota()
    {
        $users = User::has('qualifications')->get();
        return view('titulacion_autores')->with(compact('users'));
    }

    public function QB_consulta1()
    {

        $categories = DB::table('categories')
            ->select('categories.nombre as categoria', 'estado', db::raw('count(*) as total'), db::raw('sum(precio) as importe'))
            ->join('books', 'categories.id', '=', 'books.category_id')
            ->groupBy('categoria', 'estado')
            ->get();

        return view('query_builder_consulta1')->with(compact('categories'));
    }

    public function getEditManytoMany($user_id)
    {
        $books = book::all()->pluck('titulo', 'id');
        $user = user::find($user_id);
        return view('edit_manytomany')->with(compact('books', 'user'));
    }

    public function putEditManytoMany(Request $request, $user_id)
    {

        // dd($request->get('my_books'));
        $user = User::find($user_id);
        $user->books()->sync($request->get('my_books'));

        return redirect('/relacion-N-M');
    }

    public function destroy(Request $request)
    {

        $ids = $request->ids;

        if (!empty($ids)) {
            book::destroy($ids);
        }

        return back();
    }

    public function datos_json()
    {
        $books = book::pluck('titulo');

        return $books;
    }
}
