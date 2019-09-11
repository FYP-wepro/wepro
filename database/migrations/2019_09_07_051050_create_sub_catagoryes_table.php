<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubCatagoryesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subCatagoryes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name');
            $table->text('src');
            $table->integer('mainCataogryID')->unsigned();
            $table->foreign('mainCataogryID')->references('id')->on('catagoryes');
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
        Schema::dropIfExists('subCatagoryes');
    }
}
