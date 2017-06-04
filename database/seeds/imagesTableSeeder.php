<?php

use Illuminate\Database\Seeder;

class imagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('imagenes')->insert([
            'usuario_id' => '1',
            'imagen' => 'https://images4.alphacoders.com/125/125086.jpg',
            'titulo' => 'castlevania',
        ]);
        DB::table('imagenes')->insert([
            'usuario_id' => '1',
            'imagen' => 'http://vignette1.wikia.nocookie.net/castlevania/images/c/c9/Castlevania_City.jpg/revision/latest?cb=20140307030446',
            'titulo' => 'ciudad',
        ]);
         DB::table('imagenes')->insert([
            'usuario_id' => '1',
            'imagen' => 'http://vignette3.wikia.nocookie.net/castlevania/images/4/4b/Castlevania_Dracula_X.jpg/revision/latest?cb=20150703032137&path-prefix=es',
            'titulo' => 'castillo',
        ]);
    }
}
