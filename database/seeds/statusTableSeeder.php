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
            'nombre' => 'Inscrito',
        ]);
        
        DB::table('estatus')->insert([
            'nombre' => 'No inscrito',
        ]);
        
        DB::table('estatus')->insert([
            'nombre' => 'Baja temporal',
        ]);
        
        DB::table('estatus')->insert([
            'nombre' => 'Baja definitiva',
        ]);
        
        DB::table('estatus')->insert([
            'nombre' => 'Egresado',
        ]);
        
    }
}
