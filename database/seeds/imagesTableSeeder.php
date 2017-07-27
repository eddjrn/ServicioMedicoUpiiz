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
        if(config('global.desarrollo')){
            DB::table('imagenes')->insert([
                'usuario_id' => '1',
                'imagen' => 'http://mdkonline.com.mx/uploads/noticias/0rfznn8ks1.jpg',
                'titulo' => 'Atendiendo a alumnos',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ]);
            DB::table('imagenes')->insert([
                'usuario_id' => '1',
                'imagen' => 'http://esmomento.org/wp-content/uploads/2016/10/csnk.jpg',
                'titulo' => 'Dia internacional del cancer de mama',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ]);
            DB::table('imagenes')->insert([
                'usuario_id' => '1',
                'imagen' => 'http://mx.emedemujer.com/wp-content/uploads/sites/5/2017/05/iStock-625879202.jpg',
                'titulo' => 'Jornada de prevencion de las ITS',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ]);

            DB::table('imagenes')->insert([
                'usuario_id' => '1',
                'imagen' => 'http://revistafarmanatur.com/wp-content/uploads/2015/02/fotolia_58601525.jpg',
                'titulo' => 'Talleres de prevencion de embarazos no deseados',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ]);

            DB::table('imagenes')->insert([
                'usuario_id' => '1',
                'imagen' => 'http://www.cardenista.org/sites/default/files/styles/large/public/field/image/ipn-mx.gif',
                'titulo' => '¡Actualización del sistema del servicio medico!',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ]);

            DB::table('imagenes')->insert([
                'usuario_id' => '1',
                'imagen' => 'https://www.gob.mx/cms/uploads/image/file/136042/Asma2016.jpg',
                'titulo' => 'Dia mundial del asma',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ]);

            DB::table('imagenes')->insert([
                'usuario_id' => '1',
                'imagen' => 'http://3.bp.blogspot.com/-FJcnz2caF1o/T7C10eZjHEI/AAAAAAAAFAw/6_ipzefEOPU/s1600/Kelsey_Niziolek_Head.jpg',
                'titulo' => 'Infografia sobre el cuerpo humano',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ]);

            DB::table('imagenes')->insert([
                'usuario_id' => '1',
                'imagen' => 'https://userscontent2.emaze.com/images/a542584a-a4d2-4bfe-a836-c08952e0850d/4650452b6082f3b761e27894fb5dc267.jpg',
                'titulo' => 'Jornada de examenes del corazon',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ]);
        }

    }
}
