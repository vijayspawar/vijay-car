<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('number');
            $table->string('model');
            $table->string('color');            
            $table->string('engine_type');
            $table->string('description');
           
            $table->bigInteger('owner_id')->unsigned();            ;
            $table->foreign('owner_id')->references('id')->on('owners');
             $table->string('car_category');
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
        Schema::dropIfExists('cars');
    }
}
