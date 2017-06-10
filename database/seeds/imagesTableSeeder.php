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

         DB::table('imagenes')->insert([
            'usuario_id' => '1',
            'imagen' => 'https://s-media-cache-ak0.pinimg.com/736x/48/5e/e9/485ee975f0386d3037c12e36d91e6b61.jpg',
            'titulo' => 'girl',
        ]);

         DB::table('imagenes')->insert([
            'usuario_id' => '1',
            'imagen' => 'https://s-media-cache-ak0.pinimg.com/736x/4a/ae/b6/4aaeb6ae48232346af42d2d2b443e8df.jpg',
            'titulo' => 'cielo',
        ]);

    }
}
