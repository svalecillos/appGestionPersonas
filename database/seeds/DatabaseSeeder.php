<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->truncateTables([
            "profesions",
            "categorias",
            "nivel_academicos",
            "promocions",
            "pais"          
        ]);
        // $this->call(UsersTableSeeder::class);
        $this->call(ProfesionSeeder::class);
        $this->call(CategoriaSeeder::class);
        $this->call(NivelAcademicoSeeder::class);
        $this->call(PromocionSeeder::class);
        $this->call(PaisesSeeder::class);
    }

    /**
	* Metodo que reinicia las secuencias de las tablas selecionadas
	* y elimina los registros de las tablas pasadas por parametros
    */
    protected function truncateTables(array $tables)
    {
    	//Reinicia la secuencia de la tabla
        DB::statement('ALTER SEQUENCE profesions_id_seq RESTART WITH 1;');
        DB::statement('ALTER SEQUENCE categorias_id_seq RESTART WITH 1;');
        DB::statement('ALTER SEQUENCE nivel_academicos_id_seq RESTART WITH 1;');
        DB::statement('ALTER SEQUENCE promocions_id_seq RESTART WITH 1;');
        DB::statement('ALTER SEQUENCE pais_id_seq RESTART WITH 1;');
        
    	foreach ($tables as $table) {
    		//Vacia la tabla antes de insertar nuevos registros
    		DB::table($table)->delete();
    	}
    }
}
