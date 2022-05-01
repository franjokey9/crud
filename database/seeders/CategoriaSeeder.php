<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            'categoria' => 'Electrónica',
        ]);
        DB::table('categorias')->insert([
            'categoria' => 'Línea Blanca',
        ]);
        DB::table('categorias')->insert([
            'categoria' => 'Deportes',
        ]);
        DB::table('categorias')->insert([
            'categoria' => 'Alimentos y Jardín',
        ]);
    }
}
