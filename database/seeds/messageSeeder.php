<?php

use Illuminate\Database\Seeder;

class messageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(config('global.desarrollo')){
            DB::table('mensajes')->insert([
                'usuario_id' => '1',
                'titulo' => 'Aviso de documentos',
                'contenido' => 'Traer su constancia de derechos del seguro medico',
                'destino' => '1',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('mensajes')->insert([
                'usuario_id' => '1',
                'titulo' => 'Aviso a los alumnos de Mecatronica',
                'contenido' => 'Actualizar datos medicos',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('mensajes')->insert([
                'usuario_id' => '1',
                'titulo' => 'Aviso a todos los alumnos',
                'contenido' => 'De ahora en adelante su estatus aparecera como no inscrito',
                'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ]);
        }
    }
}
