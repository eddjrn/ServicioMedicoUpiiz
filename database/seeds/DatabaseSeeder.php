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

         $this->call(stateTableSeeder::class);
         $this->call(placeTableSeeder::class);
         $this->call(carrerTableSeeder::class);
         $this->call(statusTableSeeder::class);
         $this->call(userTableSeeder::class);
         $this->call(studentTableSeeder::class);
         $this->call(InfoTableSeeder::class);
         $this->call(imagesTableSeeder::class);
         $this->call(VideoTableSeeder::class);
         $this->call(clinicTableSeeder::class);
         $this->call(medicalInstitutionTableSeeder::class);
         $this->call(medicalDataTableSeeder::class);
         $this->call(medicalRecordTableSeeder::class);
         $this->call(messageSeeder::class);
         $this->call(tutorialTableSeeder::class);

        Model::reguard();
    }
}
