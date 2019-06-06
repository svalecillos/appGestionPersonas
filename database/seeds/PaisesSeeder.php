<?php

use Illuminate\Database\Seeder;

class PaisesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pais')->insert([
            'codigo' => 'VE',
            'descripcion' => 'Venezuela'
        ]);
        DB::table('pais')->insert([
            'codigo' => 'NI',
            'descripcion' => 'Nicaragua'
        ]);
        DB::table('pais')->insert([
            'codigo' => 'AR',
            'descripcion' => 'Argentina'
        ]);
        DB::table('pais')->insert([
            'codigo' => 'UY',
            'descripcion' => 'Uruguay'
        ]);
        DB::table('pais')->insert([
            'codigo' => 'BR',
            'descripcion' => 'Brasil'
        ]);
        DB::table('pais')->insert([
            'codigo' => 'CL',
            'descripcion' => 'Chile'
        ]);
    }
}
