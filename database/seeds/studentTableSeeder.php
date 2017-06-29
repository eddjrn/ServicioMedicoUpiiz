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
            'sexo' => '1',
            'documentacion' => '1',
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
        ]);

        DB::table('alumno')->insert([
            'usuario_id' => '3',
            'carrera_id' => '2',
            'municipio_id' => '6',
            'estado_id' => '15',
            'sexo' => '1',
            'documentacion' => '2',
            'turno' => '1',
            'telefono' => '492-127-33-00',
            'calle' => 'Priv.Santos Bañuelos',
            'numExterior' => '114',
            'numInterior' => '114',
            'colonia' => 'Panfilo Natera',
            'codigoPostal' => '98070',
            'localidad' => 'Konoha',
            'curp' => 'MASM020203MDFRNTA7',
            'fechaNacimiento' => '1994-12-09',
            'tutor' => 'Elo',
            'telefonoTutor' => '492-127-33-00',
            'celularTutor' => '92-2-59-66',
            'parentescoTutor' => '1',
            'estatus_id' => '2',
        ]);
    }
}
