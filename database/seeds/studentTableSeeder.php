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
        DB::table('alumno')->insert([
            'usuario_id' => '2',
            'carrera_id' => '1',
            'municipio_id' => '6',
            'estado_id' => '15',
            'noSeguro' => '34159930871',
            'sexo' => '1',
            'telefono' => '492-161-28-12',
            'calle' => 'Britaneas',
            'numExt' => '108',
            'numInt' => '12',
            'colonia' => 'Lomas de pollo',
            'cp' => '98600',
            'localidad' => 'Rancho de ningún lugar',
            'estatus_id' => '3',
        ]);
    }
}
