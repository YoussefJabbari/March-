<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fabricant_id')->unsigned();
            $table->integer('detaillant_id')->unsigned();
            $table->string('achats');
            $table->integer('depenses');
            $table->float('economies');
            $table->integer('semaine');

            $table->foreign('fabricant_id')->references('id')->on('fabricants');
            $table->foreign('detaillant_id')->references('id')->on('detaillants');
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
        Schema::dropIfExists('plans');
    }
}
