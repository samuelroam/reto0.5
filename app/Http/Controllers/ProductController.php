<?php
namespace App\Http\Controllers;
use App\Producto;
use Illuminate\Http\Request;
class ProductController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
//Mediante este metodo seleccionamos todos los productos de una tienda
public function index($id)
{
    $productos = Producto::all()->where("id_tienda","=",$id);
//Devolvemos los productos y el id de la tienda
    return view("tienda",["productos"=>$productos,"id"=>$id]);
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
* Añade un nuevo producto
*
* @param  \Illuminate\Http\Request  $request Los datos recibidos desde el formulario
*
*/
public function store(Request $request)
{
//Guardamos los valores enviados por el formulario en variables
    $nombre=$request->input("nombre");
    $descripcion=$request->input("comentarios");
    $stock=$request->input("stock");
    $imagen = "";
    $enlace=$request->input("enlace");
    $id=$request->input("id");
//En el caso de la imagen primero guardamos su nombre y luego lo movemos a la ruta deseada
    $imagen = $request->file('photo')->getClientOriginalName();
    $request->file("photo")->move("img/productos",$imagen);
//Por último añadimos el producto a la base de datos utilizando el modelo
    Producto::insert([
        ["nombre"=>$nombre,"descripcion"=>$descripcion,"stock"=>$stock,"imagen"=>$imagen,"enlace"=>$enlace,"id_tienda"=>$id]
    ]);
//Volvemos a la tienda en la que estabamos
    return redirect("/productos/$id");
}
/**
* Display the specified resource.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function show($id)
{

}
/**
* Obtenemos el stock de un producto y lo devolvemos al formulario de cambiar el stock
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function edit($id)
{
    $productos = Producto::all()->where("id","=",$id);
    foreach ($productos as $producto) {
        return view("cambiar_stock",["id"=>$id,"stock"=>$producto->stock]);
    }
}
/**
* Cambia el stock de un producto y vuelve a la tienda
*
* @param  \Illuminate\Http\Request  $request
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function update(Request $request)
{
    $stock=$request->input("stock");
    $id=$request->input("id");
    Producto::where("id",$id)->update(["stock"=>$stock]);
    $productos=Producto::all()->where("id",$id);
    foreach ($productos as $producto) {
        return redirect("/productos/$producto->id_tienda");
    }
}
/**
* Elimina un producto
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function destroy($id)
{

//Elimina el producto de la base datos y vuelve a la tienda
        Producto::where("id",$id)->delete();
        return redirect("/productos/$producto->id_tienda");
    }
}
}
