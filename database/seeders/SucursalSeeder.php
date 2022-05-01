<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SucursalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sucursals')->insert([
            'sucursal' => 'Cuernavaca',
        ]);
        DB::table('sucursals')->insert([
            'sucursal' => 'Yautepec',
        ]);
        DB::table('sucursals')->insert([
            'sucursal' => 'Cuautla',
        ]);
        DB::table('sucursals')->insert([
            'sucursal' => 'Acapulco',
        ]);
    }
}
