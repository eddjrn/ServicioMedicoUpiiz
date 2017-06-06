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
            'nombre' => 'Pepe Pedro',
            'apellidoPaterno' => 'Peréz',
            'apellidoMaterno' => 'Pereira',
            'email' => 'mail@correo.com',
            'password' => bcrypt('admin'),
            'identificacion' => '111128',
            'tipo' => '1',
        ]);
        
        DB::table('usuario')->insert([
            'nombre' => 'Juanito',
            'apellidoPaterno' => 'Hernandéz',
            'apellidoMaterno' => 'Duarte',
            'email' => 'Juandsl_w@correo.com',
            'password' => bcrypt('norman'),
            'identificacion' => '2014670000',
            'tipo' => '2',
        ]);
        
    }
}
