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
         DB::table('informacion')->insert([
            'usuario_id' => '1',
            'titulo' => 'parece ser',
            'contenido' => 'waaa',
        ]);
          DB::table('informacion')->insert([
            'usuario_id' => '1',
            'titulo' => 'odi',
            'contenido' => 'mmmmm',
        ]);
        
    }
}
