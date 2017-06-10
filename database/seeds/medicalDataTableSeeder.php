<?php

use Illuminate\Database\Seeder;

class medicalDataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('datosMedicos')->insert([
            'usuario_id' => '2',
            'numSeguro' => '1175 48 36420',
            'clinica_id' => '1',
            'proveedorSeguro' => '1',
            'institucionSeguro_id' => '1',
            'tipoSangre' => '1'
        ]);
    }
}
