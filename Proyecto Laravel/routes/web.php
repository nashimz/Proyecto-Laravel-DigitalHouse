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
/////////

/////////

Route::get('/', function () {
    return view('index');
});
Route::get('/inicio', function () {
    return view('index');
});
Route::get('/carrito', function () {
    return view('carrito');
});
Route::get('productos', 'ProductosController@listar');

Route::get('/detalle', function () {
    return view('detalle');
});
Route::get('/contacto', function () {
    return view('contacto');
});
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/perfilusuario', function () {
    return view('perfilusuario');
});
Route::get('/registro', function () {
    return view('registro');
});

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

//ADMIN


Route::get('/admin/admUsusarios', function () {
    return view('./admin/admUsusarios');
});

////////////////////////
/// ADMIN DE PRODUCTOS
///////////////////////
Route::get('/admin/admProductos', 'ProductosController@index');

Route::get('/admin/formAgregarProducto', 'ProductosController@create');

Route::post('/admin/formAgregarProducto', 'ProductosController@store');

Route::get('/admin/admEditarProducto/{id}', 'ProductosController@edit');

Route::post('/admin/admEditarProducto/{id}', 'ProductosController@update');

Route::get('/formEliminarProducto/{id}', 'ProductosController@destroy');

Route::get('/panel',function (){
    return view('/panel');})->middleware("admin");





////////////////////////
/// ADMIN DE MARCAS
///////////////////////

Route::get('/admin/admMarcas', 'MarcasController@index');

Route::get('/admin/formAgregarMarca', 'MarcasController@create');
Route::post('/agregarMarca', 'MarcasController@store');

Route::get('/admin/formModificarMarca/{id}', 'MarcasController@edit');
Route::post('/modificarMarca/{id}', 'MarcasController@update');

Route::get('/eliminarMarca/{id}', 'MarcasController@destroy');

////////////////////////
/// ADMIN DE CATEGORIAS
///////////////////////

Route::get('/admin/admCategorias', 'CategoriasController@index');

Route::get('/admin/formAgregarCategoria', 'CategoriasController@create');
Route::post('/agregarCategoria', 'CategoriasController@store');

Route::get('/admin/formModificarCategoria/{id}', 'CategoriasController@edit');
Route::post('/modificarCategoria/{id}', 'CategoriasController@update');

Route::get('/eliminarCategoria/{id}', 'CategoriasController@destroy');











//RUTA CON PARAMETROS
//  Route::get('/producto/{id}/{nombre}', function (id) {
//      $vac = compact('id', 'nombre');
//     return view('welcome',$vac);
// });

//RUTA CON PARAMETROS OPTATIVOS
//  Route::get('/producto/{id?}', function (id) {
//     return view('welcome');
// });

//RUTA CON PARAMETROS DEFAULT
//  Route::get('/producto/{id}', function (id = 'Sin valor') {
//     return view('welcome');
// });

//RUTA Y CONTROLADOR->METODO
//  Route::get('/producto', "PeliculasController@index" {
// });

//RUTA CON ID Y CONTROLADOR->METODO
//  Route::get('/producto/{id}', "PeliculasController@create" {
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
