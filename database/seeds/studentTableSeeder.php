<?php

use Illuminate\Database\Seeder;

class studentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     
    public function run()
    {
        if(config('global.desarrollo')){
            DB::table('alumno')->insert([
                'usuario_id' => '3',
                'carrera_id' => '1',
                'municipio_id' => '6',
                'estado_id' => '15',
                'sexo' => '1',
                'documentacion' => '2',
                'observaciones' => 'Faltan documentos por entregar',
                'turno' => '1',
                'telefono' => '492-161-28-12',
                'calle' => 'Britaneas',
                'numExterior' => '108',
                'numInterior' => '12-A',
                'colonia' => 'Lomas de pollo',
                'codigoPostal' => '98600',
                'localidad' => 'Rancho de ningún lugar',
                'curp' => 'MASM020203MDFRNTA6',
                'fechaNacimiento' => '1995-01-01',
                'tutor' => 'Camila Hernandéz Duarte',
                'telefonoTutor' => '492-177-28-13',
                'celularTutor' => '92-4-30-0-6',
                'parentescoTutor' => '1',
                'estatus_id' => '1',
                'pregunta' => 'Villano de Marvel Favorito',
                'respuesta' => 'Carnage',
            ]);
            
            $limit = config('global.limite');
            $word = " abcdefghijklmnopqrstuvwxyzae i o u";
            $capitalWord = " ABCDEFGHIJKLMNOPQRSTUVWXYZAEIOU";
            
            for($i = 0; $i <= $limit; $i++){
                $tutorName = "";
                $place = "";
                $question = "";
                $answer = "";
                
                for($j = 1; $j <= 4;$j++){
                    $tutorName .= substr(str_shuffle($word), 0, rand (0 , 10)). ' ';
                }
                for($j = 1; $j <= 3;$j++){
                    $place .= substr(str_shuffle($word), 0, rand (0 , 10)). ' ';
                }
                for($j = 1; $j <= 5;$j++){
                    $question .= substr(str_shuffle($word), 0, rand (0 , 10)). ' ';
                }
                for($j = 1; $j <= 6;$j++){
                    $answer .= substr(str_shuffle($word), 0, rand (0 , 10)). ' ';
                }
            
                DB::table('alumno')->insert([
                    'usuario_id' => $i+4,
                    'carrera_id' => rand(1 , 5),
                    'municipio_id' => rand(1 , 58),
                    'estado_id' => rand (1 , 31),
                    'sexo' => rand (1 , 2),
                    'documentacion' => rand (1 , 2),
                    'observaciones' => substr(str_shuffle($word), 0, rand (0 , 99)),
                    'turno' => rand (1 , 2),
                    'telefono' => rand (100 , 999).'-'.rand (100 , 999).'-'.rand (10 , 99).'-'.rand (10 , 99),
                    'calle' => 'Calle generica',
                    'numExterior' => rand (0 , 999),
                    'numInterior' => rand (0 , 999),
                    'colonia' => 'Generica',
                    'codigoPostal' => rand (0 , 9).rand (0 , 9).rand (0 , 99).rand (0 , 99),
                    'localidad' => $place,
                    'curp' => substr(str_shuffle($capitalWord), 0, 4).rand (0 , 99).rand (0 , 99).rand (0 , 99).substr(str_shuffle($capitalWord), 0, 7).rand (1 , 9),
                    'fechaNacimiento' => '1995-01-01',
                    'tutor' => $tutorName,
                    'telefonoTutor' => rand (10 , 99).'-'.rand (0 , 9).'-'.rand (10 , 99).'-'.rand (0 , 9).'-'.rand (0 , 9),
                    'celularTutor' => rand (100 , 999).'-'.rand (100 , 999).'-'.rand (10 , 99).'-'.rand (10 , 99),
                    'parentescoTutor' =>  rand (1 , 4),
                    'estatus_id' =>  rand (1 , 5),
                    'pregunta' => $question,
                    'respuesta' => $answer,
                ]);
            }
        }
    }
    
    
}
