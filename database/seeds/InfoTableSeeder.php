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
            'contenido' => 'no sale',
        ]);
         DB::table('informacion')->insert([
            'usuario_id' => '1',
            'titulo' => 'parece ser',
            'contenido' => 'waaa',
        ]);
          DB::table('informacion')->insert([
            'usuario_id' => '1',
            'titulo' => 'odi',
            'contenido' => 'si salio xD',
        ]);
        DB::table('informacion')->insert([
            'usuario_id' => '1',
            'titulo' => 'Castlevania III: Dracula s Curse',
            'contenido' => 'Castlevania III: Dracula s Curse es el segundo juego en la cronología oficial de la serie. Tiene como protagonista a Trevor Belmont, ancestro de Simon. De acuerdo con el manual de instrucciones del juego, el episodio toma lugar 215 años antes de los sucesos ocurridos en Castlevania I y Castlevania II: Simon s Quest. Algunos personajes y elementos introducidos por primera vez en este juego se pueden apreciar en sus demás secuelas. En febrero de 2017 la plataforma de streaming Netflix anuncia la producción de una serie anime basada en este juego, producida por Adi Shakar. En mayo del mismo año se muestra el primer trailer y se confirma el estreno de la primera temporada para 7 de julio de 2017 y de la segunda para 2018',
        ]);
        DB::table('informacion')->insert([
            'usuario_id' => '1',
            'titulo' => 'Castlevania: Harmony of Dissonance',
            'contenido' => 'La historia empieza 50 años después de que Simon Belmont derrotó a Drácula acabando con la maldición que tenía, es entonces cuando Juste Belmont, descendiente directo del legendario cazavampiros, recibe el título de cazavampiros junto con el látigo, el famoso Vampire Killer, en ese tiempo un compañero de la infancia Maxim Kishine salió del pueblo para poder entrenar más duro y alcanzar a Juste en fuerza y poderes, al momento de su regreso, Maxim le dice a Juste que una amiga querida de ellos, Lydie, fue secuestrada, yendo a la búsqueda de ella, encuentran en la densa niebla un castillo a lo lejos de una colina, con las puertas del castillo abiertas y la luna llena enorme en el oscuro cielo, les da la bienvenida Castlevania, el legendario castillo maldito del Conde Drácula. Castlevania: Harmony of Dissonance es el segundo juego de la plataforma del Game Boy Advance, el cual sobrepasa por mucho a su antecesor (Castlevania: Circle of the Moon) ya que el equipo responsable de la producción de este fue el mismo que programo Castlevania: Symphony of the Night',
        ]);
    }
}
