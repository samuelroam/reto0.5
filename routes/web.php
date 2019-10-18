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

Route::post("/tiendas/select","ShopController@select")->name("select");

Route::get('/productos/{id}',"ProductController@index");

Route::post("/añadir_producto/store/","ProductController@store")->name("add");
Route::get("/tienda/destroy/{id}","ProductController@destroy")->name("delete");

Route::get("/cambiar_stock/{id}",function($id){
	return view("cambiar_stock",["id"=>$id]);
})->name("stock");

Route::post("/cambiar_stock/cambiar","ProductController@update")->name("update");