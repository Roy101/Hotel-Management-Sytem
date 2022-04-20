<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateM1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m1s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('food_items',100);
            $table->integer('price');
            $table->integer('number');
            $table->integer('total');
            $table->string('quality',100);
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
        Schema::dropIfExists('m1s');
    }
}
