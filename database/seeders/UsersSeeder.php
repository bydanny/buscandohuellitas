<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Daniel Ramirez',
            'email' => 'daniel@buscandohuellitas.com',
            'password' => Hash::make('123456789'),
          ]);

          DB::table('users')->insert([
            'name' => 'Noel Mora',
            'email' => 'noel@buscandohuellitas.com',
            'password' => Hash::make('123456789'),
          ]);

          DB::table('users')->insert([
            'name' => 'Samantha Reyes',
            'email' => 'Samantha@buscandohuellitas.com',
            'password' => Hash::make('123456789'),
          ]);
    
    }
}
