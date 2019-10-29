<?php

use Illuminate\Database\Seeder;

class tiendas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tiendas')->insert([
            'nombre' => "Zara"
        ]); 

        DB::table('tiendas')->insert([
            'nombre' => "MediaMarkt"
        ]); 

        DB::table('tiendas')->insert([
            'nombre' => "Eroski"
        ]); 
    }
}
