<?php

use Illuminate\Database\Seeder;

class tutorialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('tutoriales')->insert([
            'usuario_id' => '1',
            'titulo' => 'never too late',
            'link' => 'https://www.youtube.com/watch?v=lL2ZwXj1tXM',
            'imagen' => 'https://i.ytimg.com/vi/lL2ZwXj1tXM/maxresdefault.jpg',
            
        ]);

        DB::table('tutoriales')->insert([
            'usuario_id' => '1',
            'titulo' => 'Documento',
            'link' => 'https://www.dropbox.com/s/jgcieuanzdvm071/seguro%20de%20vida%20grupo.pdf?dl=0',
            'imagen' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS69lHD4ytrHUYi3kFbyBG2oT_2EOSVVjqC3gS2bTMTzGl4OH7P',
            
        ]);
    }
}
