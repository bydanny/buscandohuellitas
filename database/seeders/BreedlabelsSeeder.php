<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class BreedlabelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            $file=fopen("public/breedlabels.txt","r") or die ("Error al abrir el archivo");
            rewind($file);
      
            while(($datos = fgetcsv($file,10000,",")) !== FALSE)
            {
              DB::table('breed_labels')->insert([
                'breedid' => $datos[0],
                'type' => $datos[1],
                'breedname' => $datos[2],
              ]);
            }
            
            fclose($file);
          }
    }
}
