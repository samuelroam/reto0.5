<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//Creamos el modelo Producto que se refiera a la tabla productos de nuestra base de datos
class Producto extends Model
{
    protected $table = "productos";
    public $timestamps = false;
}
