<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMechaniccarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mechaniccars', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->bigInteger('owner_id')->unsigned();
            $table->bigInteger('mechanic_id')->unsigned();              ;
            $table->foreign('owner_id')->references('id')->on('owners');
            $table->foreign('mechanic_id')->references('id')->on('mechanics');
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
        Schema::dropIfExists('mechaniccars');
    }
}
