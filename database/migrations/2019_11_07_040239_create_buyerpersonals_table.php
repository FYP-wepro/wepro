<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuyerpersonalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buyerpersonals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fullName');
            $table->string('discription');
            $table->string('profileImg');
            $table->string('country');
            $table->integer('buyerId')->unsigned();
            $table->foreign('buyerId')->references('id')->on('buyers');
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
        Schema::dropIfExists('buyerpersonals');
    }
}
