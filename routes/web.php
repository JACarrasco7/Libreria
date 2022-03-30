<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//BUSQUEDA PREDICTIVA

Route::get('/books/json', 'QueryController@datos_json');

//

Route::get('/{search?}', 'QueryController@all')->name('all');

Route::get('/categorias', 'QueryController@categorias')->name('categorias');

Route::get('/categorias-doesntHave', 'QueryController@categorias_doesntHave')->name('categorias_doesntHave');

Route::get('/categorias-estado', 'QueryController@categorias_estado')->name('categorias_estado');

Route::get('/categorias-finalizado', 'QueryController@categorias_finalizado')->name('categorias_finalizado');

Route::get('/relacion-N-M', 'QueryController@relacion_N_M')->name('relacion_N_M');

Route::get('/relacion-N-M-libros', 'QueryController@relacion_N_M_libros')->name('relacion_N_M_libros');

Route::get('/relacion-N-M-autores-titulacion-nota', 'QueryController@relacion_N_M_autores_titulacion_nota')->name('relacion_N_M_autores_titulacion_nota');

Route::get('/query-builder-consulta-1', 'QueryController@QB_consulta1')->name('QB_consulta1');

route::get('/edit-manytomany/{user_id}', 'QueryController@getEditManytoMany')->name('getEditmanyToMany');

route::put('/put-manytomany/{user_id}', 'QueryController@putEditManyToMany')->name('putEditManyToMany');

Route::delete('destroy', 'QueryController@destroy');
