<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('name');
            $table->string('age');
            $table->string('breed1');
            $table->string('breed2');
            $table->string('gender');
            $table->string('color1');
            $table->string('color2');
            $table->string('color3');
            $table->string('maturutysize');
            $table->string('furlenght');
            $table->string('vaccinated');
            $table->string('dewormed');
            $table->string('sterilized');
            $table->string('health');
            $table->string('quantity');
            $table->string('fee');
            $table->string('state');
            $table->string('rescuerID');
            $table->string('videoamt');
            $table->string('description', 4000);
            $table->string('petID');
            $table->string('photoamt');
            
            
          /*$table->string('name');
            $table->string('speciesname');
            $table->string('sexname');
            $table->string('age');
            $table->string('size');
            $table->string('primary_breed');
            $table->string('secondary_breed');
            $table->string('mixed');
            $table->string('primary_color');
            $table->string('secondary_color');
            $table->string('type');*/
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pets');
    }
}
