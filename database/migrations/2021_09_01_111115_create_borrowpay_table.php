<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBorrowpayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('borrowpay', function (Blueprint $table) {
            $table->id('id');
            $table->date('borrowday');
            $table->date('payday');
           
            $table->unsignedBigInteger('id_student');
            $table->foreign('id_student')->references('id')->on('student');
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('borrowpay');
    }
}
