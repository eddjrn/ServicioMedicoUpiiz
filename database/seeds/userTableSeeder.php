<?php

use Illuminate\Database\Seeder;

class userTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuario')->insert([
            'nombre' => 'Pepe',
            'apellidoPa' => 'Peréz',
            'apellidoMa' => 'Pereira',
            'email' => 'mail@correo.com',
            'clave' => 'admin',
            'boleta' => '2014670000',
            'tipo' => '1',
        ]);
        
        DB::table('usuario')->insert([
            'nombre' => 'Pedro',
            'apellidoPa' => 'Peréz',
            'apellidoMa' => 'Nóñae',
            'email' => 'JE%_sá@correo.com',
            'clave' => 'norman',
            'boleta' => '2015671234',
            'tipo' => '2',
        ]);
        
    }
}
