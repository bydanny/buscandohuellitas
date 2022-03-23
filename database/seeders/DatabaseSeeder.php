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
        $this->call(PetsSeeder::class);
        $this->call(BreedlabelsSeeder::class);
        $this->call(ColorslabelsSeeder::class);
        $this->call(StateslabelsSeeder::class);
    }
}
