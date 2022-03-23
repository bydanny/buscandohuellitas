<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColorslabelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            $file=fopen("public/colorlabels.txt","r") or die ("Error al abrir el archivo");
            rewind($file);
      
            while(($datos = fgetcsv($file,10000,",")) !== FALSE)
            {
              DB::table('color_labels')->insert([
                'color_id' => $datos[0],
                'color_name' => $datos[1],
              ]);
            }
            
            fclose($file);
          }
    }
}
