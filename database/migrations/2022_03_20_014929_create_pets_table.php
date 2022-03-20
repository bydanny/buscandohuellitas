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
            $table->string('name');
            $table->string('speciesname');
            $table->string('sexname');
          /*  $table->string('age');
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
