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


//Estas primeras rutas simplemente nos redirigen a otra vista
Route::get('/', function () {
    return view('welcome');
})->name("landing");

Route::get("/tiendas",function(){
	return view('tiendas');
})->name("tiendas");

Route::get("/añadir_producto",function(){
	return view("añadir_producto");
})->name("añadir");

Route::get("/plano",function(){
    return view("plano");
})->name('plano');

Route::get("/tienda",function(){
	return view("tienda");
})->name("tienda");

Route::get("/eliminar/{id}",function($id){
	return view("eliminar",["id"=>$id]);
});

//En las siguientes rutas llamamos a los metodos de los diferentes controladores
Route::get('/productos/{id}',"ProductController@index");

Route::get("/tienda/destroy/{id}","ProductController@destroy")->name("delete");

Route::get("/cambiar_stock/{id}","ProductController@edit");

//Las rutas post reciben información de un formulario y la envian a los metodos de los controladores
Route::post("/cambiar_stock/cambiar","ProductController@update")->name("update");

Route::post("/tiendas/select","ShopController@select")->name("select");

Route::post("/añadir_producto/store/","ProductController@store")->name("add");