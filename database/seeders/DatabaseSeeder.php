<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([

            CatSeeder::class,
            trainerseeder::class,
            courseSeeder::class,
            studentSeeder::class,
            coursestudentSeeder::class,
            UserSeeder::class,
            testmoSeeder::class,
            sitecontent::class,
            SettingsSeeder::class,

        ]);
    }
}
