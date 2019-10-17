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
<<<<<<< HEAD
})->name("landing");
=======
});
>>>>>>> b232d5ac156a40057f567dc54e6347f6c12579ac

Route::get("/tiendas",function(){
	return view("tiendas");
})->name('tiendas');
