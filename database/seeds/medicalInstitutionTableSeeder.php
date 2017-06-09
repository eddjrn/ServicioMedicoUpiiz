<?php

use Illuminate\Database\Seeder;

class medicalInstitutionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('institucionSeguro')->insert([
            'nombre' => 'IMSS',
        ]);
        
        DB::table('institucionSeguro')->insert([
            'nombre' => 'ISSSTE',
        ]);
        
        DB::table('institucionSeguro')->insert([
            'nombre' => 'Servicios de salud',
        ]);
        
        DB::table('institucionSeguro')->insert([
            'nombre' => 'PEMEX',
        ]);
        
        DB::table('institucionSeguro')->insert([
            'nombre' => 'SEDENA',
        ]);
        
        DB::table('institucionSeguro')->insert([
            'nombre' => 'Particular',
        ]);
    }
}
