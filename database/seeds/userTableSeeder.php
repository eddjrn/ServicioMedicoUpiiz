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
            'completado' => true,
        ]);

        DB::table('usuario')->insert([
            'nombre' => 'UPIIZ-IPN',
            'apellidoPaterno' => 'Desarrolladores',
            'apellidoMaterno' => 'SM',
            'email' => 'eemail@correo.com',
            'password' => bcrypt('desa'),
            'identificacion' => '12345678',
            'tipo' => '3',
            'completado' => true,
        ]);

        if(config('global.desarrollo')){
            DB::table('usuario')->insert([
                'nombre' => 'Juanito',
                'apellidoPaterno' => 'Hernandéz',
                'apellidoMaterno' => 'Duarte',
                'email' => 'Juandsl_w@correo.com',
                'facebook' => 'https://www.facebook.com/search/top/?q=servicio%20medico%20upiiz',
                'password' => bcrypt('1234'),
                'identificacion' => '2016670126',
                'tipo' => '2',
                'completado' => true,
            ]);

            $limit = config('global.limite');
            $word = " abcdefghijklmnopqrstuvwxyzae i o u";
            $capitalWord = " ABCDEFGHIJKLMNOPQRSTUVWXYZAEIOU";

            for($i = 0; $i <= $limit; $i++){
                $name = "";
                $lastName1 = substr(str_shuffle($word), 0, rand (5 , 10));
                $lastName2 = substr(str_shuffle($word), 0, rand (5 , 10));
                $email = substr(str_shuffle($word), 0, rand (5 , 15)).'@correo.com';

                for($j = 1; $j <= 2;$j++){
                    $name .= substr(str_shuffle($word), 0, rand (5 , 10)). ' ';
                }

                DB::table('usuario')->insert([
                    'nombre' => $name,
                    'apellidoPaterno' => $lastName1,
                    'apellidoMaterno' => $lastName2,
                    'email' => $email,
                    'facebook' => 'https://www.facebook.com/search/top/?q=servicio%20medico%20upiiz',
                    'password' => bcrypt('norman'),
                    'identificacion' => '20'.rand(10 , 99).rand(10 , 99).rand(10 , 99).rand(10 , 99),
                    'tipo' => '2',
                    'completado' => true,
                ]);
            }
        }
    }
}
