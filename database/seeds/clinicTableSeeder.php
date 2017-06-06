<?php

use Illuminate\Database\Seeder;

class clinicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clinica')->insert([
            'numero' => '1',
            'tipo' => 'HGZMF',
            'municipio_id' => '1',
        ]);
    }
}
