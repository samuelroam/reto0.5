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
	return view("tiendas");
})->name('tiendas');

Route::get("/plano",function(){
    return view("plano");
})->name('plano');

Route::get("/prueba",function(){
    return view("prueba");
})->name('prueba');

Route::get('blade', function () {
    return view('prueba');
});
