<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book', function (Blueprint $table) {
            $table->id('id');
            $table->string('nameb');
            $table->string('image',300);
            $table->string('publish',100);
            $table->tinyInteger('stt')->default(1);
            $table->integer('quantity');
            $table->string('author',100);
            $table->string('decrip',500);
            $table->unsignedBigInteger('id_type');
            $table->unsignedBigInteger('id_location');
            $table->foreign('id_type')->references('id')->on('types');
            $table->foreign('id_location')->references('id')->on('locations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book');
    }
}
