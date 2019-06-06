<?php

use Illuminate\Database\Seeder;

class NivelAcademicoSeeder extends Seeder
{
    public function run()
    {
        DB::table('nivel_academicos')->insert([
            'descripcion' => 'PRIMARIA'
        ]);
        DB::table('nivel_academicos')->insert([
            'descripcion' => 'SECUNDARIA (BACHILLERATO)'
        ]);
        DB::table('nivel_academicos')->insert([
            'descripcion' => 'BACHILLERATO TÉCNICO'
        ]);
        DB::table('nivel_academicos')->insert([
            'descripcion' => 'TÉCNICO SUPERIOR'
        ]);
        DB::table('nivel_academicos')->insert([
            'descripcion' => 'UNIVERSITARIO (LICENCIADO, INGENIERO)'
        ]);
        DB::table('nivel_academicos')->insert([
            'descripcion' => 'MAESTRÍA / ESPECIALIZACIÓN'
        ]);
        DB::table('nivel_academicos')->insert([
            'descripcion' => 'DOCTORADO / PHD'
        ]);
        DB::table('nivel_academicos')->insert([
            'descripcion' => 'OTRO'
        ]);
    }
}
