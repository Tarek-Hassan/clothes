<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSizeCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('size__categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('size');
            $table->Integer('categorydetails_id');
            $table->foreign('categorydetails_id')->references('id')->on('categoryDetails');

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
        Schema::dropIfExists('size__categories');
    }
}
