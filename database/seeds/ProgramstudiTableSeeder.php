<?php

use Illuminate\Database\Seeder;
use App\Programstudi;

class ProgramstudiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // Let's clear the users table first
         Programstudi::truncate();

         $faker = \Faker\Factory::create();
 
         // Let's make sure everyone has the same password and 
         // let's hash it before the loop, or else our seeder 
         // will be too slow.
        //  $password = Hash::make('toptal');
 
        Programstudi::create([
             'prodi' => 'Teknik Informatika',
             'singkatan' => 'TI',
             'status' => 1,
         ]);

         Programstudi::create([
            'prodi' => 'Sistem Informasi',
            'singkatan' => 'SI',
            'status' => 1,
        ]);
 
         // And now let's generate a few dozen users for our app:
        //  for ($i = 0; $i < 10; $i++) {
        //     Programstudi::create([
        //          'name' => $faker->name,
        //          'email' => $faker->email,
        //          'password' => $password,
        //      ]);
        //  }a
    }
}
