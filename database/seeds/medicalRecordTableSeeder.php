<?php

use Illuminate\Database\Seeder;

class medicalRecordTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        if(config('global.desarrollo')){
            DB::table('historiaMedica')->insert([
                'usuario_id' => '3',
                
                'alergias' => 'asma,polvo,gatos',
                
                'fumar' => true,
                'NumFumar' => '3',
                'edadFumar' => '17',
                
                'alcohol' => true,
                'numAlcohol' => '2',
                
                'transfusiones' => true,
                'edadTransfusiones' => '18',
                
                'cirugias' => 'garganta,corazon',
                'fracturas' => 'hombro,brazo',

                'presionAlta' => '1', 
                'diabetes' => '2',
                'artritis' => '3',
                'asma'  => '4',
                'cancer' => '5',
                'epilepsias' => '1',
                'enfCorazon' => '2',
                'sobrePeso' => '3',
                'enfTiroides' => '4',
                'bipolaridad' => '5',
                'esquizofrenia' => '1',
                'depresion' => '2',

            ]);

            $limit = config('global.limite');
            $word = " abcdefghijklmnopqrstuvwxyzae i o u";
            $capitalWord = " ABCDEFGHIJKLMNOPQRSTUVWXYZAEIOU";
            
            for($i = 0; $i <= $limit; $i++){
                $allergy = "";
                
                for($j = 1; $j <= 4;$j++){
                    $allergy .= substr(str_shuffle($word), 0, rand (0 , 10)). ' ';
                }
                
                DB::table('historiaMedica')->insert([
                    'usuario_id' => $i+4,

                    'alergias' => $allergy,
                    
                    'fumar' => rand(0 , 1),
                    'NumFumar' => rand(0 , 5),
                    'edadFumar' => rand(15 , 22),
                    
                    'alcohol' => rand(0 , 1),
                    'numAlcohol' => rand(1 , 4),
                    
                    'transfusiones' => rand(0 , 1),
                    'edadTransfusiones' => rand(10 , 23),
                    
                    'cirugias' => substr(str_shuffle($word), 0, rand (0 , 10)),
                    'fracturas' => substr(str_shuffle($word), 0, rand (0 , 10)),

                    'presionAlta' => rand(1 , 5).rand(1 , 5), 
                    'diabetes' => rand(1 , 5).rand(1 , 5),
                    'artritis' => rand(1 , 5).rand(1 , 5),
                    'asma'  => rand(1 , 5).rand(1 , 5),
                    'cancer' => rand(1 , 5).rand(1 , 5),
                    'epilepsias' => rand(1 , 5).rand(1 , 5),
                    'enfCorazon' => rand(1 , 5).rand(1 , 5),
                    'sobrePeso' => rand(1 , 5).rand(1 , 5),
                    'enfTiroides' => rand(1 , 5).rand(1 , 5),
                    'bipolaridad' => rand(1 , 5).rand(1 , 5),
                    'esquizofrenia' => rand(1 , 5).rand(1 , 5),
                    'depresion' => rand(1 , 5).rand(1 , 5),

                ]);
            }
        }
    }
}
