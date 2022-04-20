<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShowingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('showings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('food_items',100);
            $table->integer('price');
            $table->integer('number');
            $table->integer('total');
            $table->string('quality',100);
            $table->string('adds',100);
            $table->integer('adds_price');
            $table->string('parcel',100);
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
        Schema::dropIfExists('showings');
    }
}
