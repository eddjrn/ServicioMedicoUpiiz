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
        DB::table('historiaMedica')->insert([
            'usuario_id' => '2',
            
            'alergias' => 'asma.,polvo,gatos',
            
            'fumar' => '1',
            'alcohol' => '1',
            'transfusiones' => '1',
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

         DB::table('historiaMedica')->insert([
            'usuario_id' => '3',

            'alergias' => 'polvo,gatos',
            
            'fumar' => '0',
            'alcohol' => '0',
            'transfusiones' => '0',
            'cirugias' => 'corazon',
            'fracturas' => 'brazo',

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
    }
}
