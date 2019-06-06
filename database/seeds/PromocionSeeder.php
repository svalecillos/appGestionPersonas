<?php

use Illuminate\Database\Seeder;

class PromocionSeeder extends Seeder
{
    public function run()
    {
        DB::table('promocions')->insert([
            'descripcion' => '001/1960'
        ]);
        DB::table('promocions')->insert([
            'descripcion' => '002/1961'
        ]);
        DB::table('promocions')->insert([
            'descripcion' => '003/1962'
        ]);
        DB::table('promocions')->insert([
            'descripcion' => '004/1963'
        ]);
        DB::table('promocions')->insert([
            'descripcion' => '005/1964'
        ]);
        DB::table('promocions')->insert([
            'descripcion' => '006/1965'
        ]);
        DB::table('promocions')->insert([
            'descripcion' => '007/1966'
        ]);
        DB::table('promocions')->insert([
            'descripcion' => '008/1967'
        ]);
        DB::table('promocions')->insert([
            'descripcion' => '009/1968'
        ]);

        DB::table('promocions')->insert([
            'descripcion' => '010/1969'
        ]);
        DB::table('promocions')->insert([
            'descripcion' => '011/1970'
        ]);
        DB::table('promocions')->insert([
            'descripcion' => '012/1971'
        ]);
        DB::table('promocions')->insert([
            'descripcion' => '013/1972'
        ]);
        DB::table('promocions')->insert([
            'descripcion' => '014/1973'
        ]);
        DB::table('promocions')->insert([
            'descripcion' => '015/1974'
        ]);
        DB::table('promocions')->insert([
            'descripcion' => '016/1975'
        ]);
        DB::table('promocions')->insert([
            'descripcion' => '017/1976'
        ]);
        DB::table('promocions')->insert([
            'descripcion' => '018/1977'
        ]);
    }
}
