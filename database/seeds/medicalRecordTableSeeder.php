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

            'presionAlta' => 'padres,abuelos,tios,hermanos,hijos', 
			'diabetes' => 'padres,abuelos,tios,hermanos,hijos',
			'artritis' => 'padres,abuelos,tios,hermanos,hijos',
			'asma'  => 'padres,abuelos,tios,hermanos,hijos',
			'cancer' => 'padres,abuelos,tios,hermanos,hijos',
			'epilepsias' => 'padres,abuelos,tios,hermanos,hijos',
			'enfCorazon' => 'padres,abuelos,tios,hermanos,hijos',
			'sobrePeso' => 'padres,abuelos,tios,hermanos,hijos',
			'enfTiroides' => 'padres,abuelos,tios,hermanos,hijos',
			'bipolaridad' => 'padres,abuelos,tios,hermanos,hijos',
			'esquizofrenia' => 'padres,abuelos,tios,hermanos,hijos',
			'depresion' => 'padres,abuelos,tios,hermanos,hijos',

        ]);

         DB::table('historiaMedica')->insert([
            'usuario_id' => '3',

            'alergias' => 'polvo,gatos',
            
            'fumar' => '0',
            'alcohol' => '0',
            'transfusiones' => '0',
            'cirugias' => 'corazon',
            'fracturas' => 'brazo',

            'presionAlta' => 'padres,abuelos,tios,hermanos,hijos', 
			'diabetes' => 'padres,abuelos,tios,hermanos,hijos',
			'artritis' => 'padres,abuelos,tios,hermanos,hijos',
			'asma' => 'padres,abuelos,tios,hermanos,hijos',
			'cancer' => 'padres,abuelos,tios,hermanos,hijos',
			'epilepsias' => 'padres,abuelos,tios,hermanos,hijos',
			'enfCorazon' => 'padres,abuelos,tios,hermanos,hijos',
			'sobrePeso' => 'padres,abuelos,tios,hermanos,hijos',
			'enfTiroides' => 'padres,abuelos,tios,hermanos,hijos',
			'bipolaridad' => 'padres,abuelos,tios,hermanos,hijos',
			'esquizofrenia' => 'padres,abuelos,tios,hermanos,hijos',
			'depresion' => 'padres,abuelos,tios,hermanos,hijos',

        ]);
    }
}
