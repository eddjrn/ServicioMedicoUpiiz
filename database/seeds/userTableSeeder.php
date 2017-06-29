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
            'facebook' => 'https://www.facebook.com/search/top/?q=servicio%20medico%20upiiz',
            'password' => bcrypt('admin'),
            'identificacion' => '111128',
            'tipo' => '1',
        ]);
        
        DB::table('usuario')->insert([
            'nombre' => 'Juanito',
            'apellidoPaterno' => 'Hernandéz',
            'apellidoMaterno' => 'Duarte',
            'email' => 'Juandsl_w@correo.com',
            'facebook' => 'https://www.facebook.com/search/top/?q=servicio%20medico%20upiiz',
            'password' => bcrypt('norman'),
            'identificacion' => '2014670000',
            'tipo' => '2',
        ]);

        DB::table('usuario')->insert([
            'nombre' => 'Izacc',
            'apellidoPaterno' => 'Belmont',
            'apellidoMaterno' => 'Juste',
            'email' => 'Izacc_w@correo.com',
            'facebook' => 'https://www.facebook.com/search/top/?q=servicio%20medico%20upiiz',
            'password' => bcrypt('1234'),
            'identificacion' => '2016670126',
            'tipo' => '2',
        ]);

           }
}
