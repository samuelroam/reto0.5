<?php

namespace App\Http\Controllers;

use DB;
use App\Producto;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $productos = Producto::all()->where("id_tienda","=",$id);
        return view("tienda",["productos"=>$productos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nombre=$request->input("nombre");
        $descripcion=$request->input("comentarios");
        $stock=$request->input("stock");
        $imagen=$request->input("imagen");
        $enlace=$request->input("enlace");
        $id=$request->input("id");

        DB::table('productos')->insert([
            ["nombre"=>$nombre,"descripcion"=>$descripcion,"stock"=>$stock,"imagen"=>$imagen,"enlace"=>$enlace,"id_tienda"=>$id]
        ]);
        return view("tienda");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
         $stock=$request->input("stock");
         $id=$request->input("id");
         DB::table('productos')->where("id","=",$id)->update(["stock"=>$stock]);
         return view("tienda");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('productos')->where("id","=",$id)->delete();
        return view("tienda");
    }
}
