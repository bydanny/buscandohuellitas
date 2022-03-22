<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            $file=fopen("public/test.csv","r") or die ("Error al abrir el archivo");
            rewind($file);
      
            while(($datos = fgetcsv($file,10000,",")) !== FALSE)
            {
              DB::table('pets')->insert([
                'type' => $datos[0],
                'name' => $datos[1],
                'age' => $datos[2],
                'breed1' => $datos[3],
                'breed2' => $datos[4],
                'gender' => $datos[5],
                'color1' => $datos[6],
                'color2' => $datos[7],
                'color3' => $datos[8],
                'maturutysize' => $datos[9],
                'furlenght' => $datos[10],
                'vaccinated' => $datos[11],
                'dewormed' => $datos[12],
                'sterilized' => $datos[13],
                'health' => $datos[14],
                'quantity' => $datos[15],
                'fee' => $datos[16],
                'state' => $datos[17],
                'rescuerID' => $datos[18],
                'videoamt' => $datos[19],
                'description' => $datos[20],
                'petID' => $datos[21],
                'photoamt' => $datos[22],
              ]);
            }
            
            fclose($file);
          }

    }
}
