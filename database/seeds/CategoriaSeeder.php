<?php

use Illuminate\Database\Seeder;

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
            'descripcion' => 'ALUMNO'
        ]);
        DB::table('categorias')->insert([
            'descripcion' => 'ALUMNO - B/M'
        ]);
        DB::table('categorias')->insert([
            'descripcion' => 'OFICIAL'
        ]);
        DB::table('categorias')->insert([
            'descripcion' => 'PROFESOR'
        ]);
    }
}
