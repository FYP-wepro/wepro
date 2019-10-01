<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSellerpersonalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellerpersonals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fullName');
            $table->string('pTitle');
            $table->string('discription');
            $table->string('profileImg');
            $table->string('coverImg');
            $table->string('pRate');
            $table->string('country');
            $table->integer('sellerId')->unsigned();
            $table->foreign('sellerId')->references('id')->on('sellers');
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
        Schema::dropIfExists('sellerpersonals');
    }
}
