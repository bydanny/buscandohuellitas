<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateslabelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            $file=fopen("public/states.txt","r") or die ("Error al abrir el archivo");
            rewind($file);
      
            while(($datos = fgetcsv($file,10000,",")) !== FALSE)
            {
              DB::table('states_labels')->insert([
                'state_id' => $datos[0],
                'state_name' => $datos[1],
              ]);
            }
            
            fclose($file);
          }
    }
}
