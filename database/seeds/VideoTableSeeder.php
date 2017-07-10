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
          DB::table('videos')->insert([
            'usuario_id' => '1',
            'titulo' => 'Tokyo Ghoul - Unravel',
            'link' => 'https://www.youtube.com/watch?v=5kjIpzpJzvU',
            'imagen' => 'http://vignette3.wikia.nocookie.net/tokyo-ghoul-la/images/4/49/Tokyo_Ghoul.jpg/revision/latest?cb=20150322195931&path-prefix=es',
    
        ]);
           DB::table('videos')->insert([
            'usuario_id' => '1',
            'titulo' => 'Bullet For My Valentine - Tears Don t Fall',
            'link' => 'https://www.youtube.com/watch?v=9sTQ0QdkN3Q',
            'imagen' => 'http://summainferno.com/wp-content/uploads/2015/07/BFMV_160415_432-PUB.jpg',
    
        ]);

           DB::table('videos')->insert([
            'usuario_id' => '1',
            'titulo' => 'All That Remains - Not Alone',
            'link' => 'https://www.youtube.com/watch?v=mS0ZJsDC76w',
            'imagen' => 'https://i.ytimg.com/vi/mS0ZJsDC76w/maxresdefault.jpg',
    
        ]);
    }
}
