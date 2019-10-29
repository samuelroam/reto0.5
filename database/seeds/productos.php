<?php

use Illuminate\Database\Seeder;

class productos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
            'nombre' => "Camiseta azul",
            'descripcion' => "Camiseta azul",
            'stock' => 55,
            'imagen' => "azul.jpeg",
            'enlace' => "www.zara.com",
            'id_tienda' => 1
        ]); 

        DB::table('productos')->insert([
            'nombre' => "Camiseta roja",
            'descripcion' => "Camiseta roja",
            'stock' => 15,
            'imagen' => "roja.jpeg",
            'enlace' => "www.zara.com",
            'id_tienda' => 1
        ]); 

        DB::table('productos')->insert([
            'nombre' => "PS4",
            'descripcion' => "PS4",
            'stock' => 55,
            'imagen' => "ps4.jpg",
            'enlace' => "www.playstation.com",
            'id_tienda' => 2
        ]); 

        DB::table('productos')->insert([
            'nombre' => "Xbox One",
            'descripcion' => "Xbox One",
            'stock' => 155,
            'imagen' => "xbox.jpeg",
            'enlace' => "www.xbox.com",
            'id_tienda' => 2
        ]); 

        DB::table('productos')->insert([
            'nombre' => "Lentejas",
            'descripcion' => "Lentejas",
            'stock' => 55,
            'imagen' => "lentejas.jpg",
            'enlace' => "www.eroski.com",
            'id_tienda' => 3
        ]); 

        DB::table('productos')->insert([
            'nombre' => "Atun",
            'descripcion' => "Atun",
            'stock' => 51,
            'imagen' => "atun.jpg",
            'enlace' => "www.eroski.com",
            'id_tienda' => 3
        ]); 
    }
}
