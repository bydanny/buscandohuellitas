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
            $table->integer('age')->unsigned();
            $table->integer('breed1')->unsigned();
            $table->integer('breed2')->unsigned();
            $table->integer('gender')->unsigned();
            $table->integer('color1')->unsigned();
            $table->integer('color2')->unsigned();
            $table->integer('color3')->unsigned();
            $table->integer('maturutysize')->unsigned();
            $table->integer('furlenght')->unsigned();
            $table->integer('vaccinated')->unsigned();
            $table->integer('dewormed')->unsigned();
            $table->integer('sterilized')->unsigned();
            $table->integer('health')->unsigned();
            $table->integer('quantity')->unsigned();
            $table->integer('fee')->unsigned();
            $table->integer('state')->unsigned();
            $table->string('rescuerID');
            $table->integer('videoamt')->unsigned();
            $table->string('description', 4000);
            $table->string('petID')->unique();
            $table->integer('photoamt')->unsigned();
            
            
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
