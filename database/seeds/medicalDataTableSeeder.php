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
            'seguro' => '1',
            'institucionSeguro_id' => '1',
            'tipoSangre' => '1'
        ]);
        
        $limit = 50;
        
        for($i = 0; $i <= $limit; $i++){
            DB::table('datosMedicos')->insert([
                'usuario_id' => $i+3,
                'numSeguro' => rand(10 , 99).rand(10 , 99).' '.rand(10 , 99).' '.rand(10 , 99).rand(10 , 99).rand(0 , 9),
                'clinica_id' => rand(1 , 54),
                'proveedorSeguro' => rand(1 , 3),
                'seguro' => rand(1 , 2),
                'institucionSeguro_id' => rand(1 , 6),
                'tipoSangre' => rand(1 , 8),
            ]);
        }

    }
}
