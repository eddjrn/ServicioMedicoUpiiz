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
        DB::table('mensajes')->insert([
            'usuario_id' => '1',
            'titulo' => 'Aviso a los alumnos de Sistemas',
            'contenido' => 'Traer su constancia de derechos del seguro medico',
            'color' => '#F3A3A3',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        
        DB::table('mensajes')->insert([
            'usuario_id' => '1',
            'titulo' => 'Aviso a los alumnos de Mecatronica',
            'contenido' => 'Actualizar datos medicos',
            'color' => '#226BA4',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        
        DB::table('mensajes')->insert([
            'usuario_id' => '1',
            'titulo' => 'Aviso a todos los alumnos',
            'contenido' => 'De ahora en adelante su estatus aparecera como no inscrito',
            'color' => '#33FC06',
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        
    }
}
