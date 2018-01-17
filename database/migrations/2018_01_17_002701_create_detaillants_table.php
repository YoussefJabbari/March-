<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetaillantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detaillants', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('marche_id')->unsigned();
            $table->float('capital');

            $table->foreign('marche_id')->references('id')->on('marches');
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
        Schema::dropIfExists('detaillants');
    }
}
