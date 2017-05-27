<?php

use Illuminate\Database\Seeder;

class statusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estatus')->insert([
            'nombre' => 'Pendiente',
        ]);
        
        DB::table('estatus')->insert([
            'nombre' => 'Rechazado',
        ]);
        
        DB::table('estatus')->insert([
            'nombre' => 'Aprobado',
        ]);
        
        DB::table('estatus')->insert([
            'nombre' => 'Inscrito',
        ]);
        
        DB::table('estatus')->insert([
            'nombre' => 'Baja',
        ]);
        
    }
}
