<?php

use Illuminate\Database\Seeder;

class InfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('informacion')->insert([
            'usuario_id' => '1',
            'titulo' => 'demonios',
            'contenido' => 'mmmmm',
        ]);
        
    }
}
