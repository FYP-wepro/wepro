<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSmaincatagoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('smaincatagories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('mainCataName');
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
        Schema::dropIfExists('smaincatagories');
    }
}
