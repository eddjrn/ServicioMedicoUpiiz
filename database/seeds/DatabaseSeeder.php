<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

         $this->call(estateTableSeeder::class);
         $this->call(placeTableSeeder::class);
         $this->call(carrerTableSeeder::class);
         $this->call(statusTableSeeder::class);
         $this->call(userTableSeeder::class);
         $this->call(studentTableSeeder::class);

        Model::reguard();
    }
}
