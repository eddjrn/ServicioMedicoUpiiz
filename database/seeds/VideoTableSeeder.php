<?php

use Illuminate\Database\Seeder;

class VideoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('videos')->insert([
            'usuario_id' => '1',
            'titulo' => 'never too late',
            'link' => 'https://www.youtube.com/watch?v=lL2ZwXj1tXM',
            'imagen' => 'https://i.ytimg.com/vi/lL2ZwXj1tXM/maxresdefault.jpg',
            
        ]);
        DB::table('videos')->insert([
            'usuario_id' => '1',
            'titulo' => 'I Hate Everything About You',
            'link' => 'https://www.youtube.com/watch?v=d8ekz_CSBVg',
            'imagen' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS69lHD4ytrHUYi3kFbyBG2oT_2EOSVVjqC3gS2bTMTzGl4OH7P',
            
        ]);
         DB::table('videos')->insert([
            'usuario_id' => '1',
            'titulo' => 'So cold',
            'link' => 'https://www.youtube.com/watch?v=rTiGlNDnOtE',
            'imagen' => 'https://i.ytimg.com/vi/cV6xBQDCTzg/hqdefault.jpg',
            
        ]);
         DB::table('videos')->insert([
            'usuario_id' => '1',
            'titulo' => 'The kill',
            'link' => 'https://www.youtube.com/watch?v=8yvGCAvOAfM',
            'imagen' => 'https://i.ytimg.com/vi/8yvGCAvOAfM/maxresdefault.jpg',
    
        ]);
    }
}
