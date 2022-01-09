<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('id_borrowpay');
            $table->unsignedBigInteger('id_book');
            $table->foreign('id_borrowpay')->references('id')->on('borrowpay');
            $table->foreign('id_book')->references('id')->on('book');
            $table->integer('quantity');
            $table->tinyInteger('stt')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail');
    }
}
