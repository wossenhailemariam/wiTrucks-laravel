<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSearchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('searches', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('company_name');
            $table->string('from');
            $table->string('to');
            $table->integer('truck_amount');
            $table->integer('truck_size');
            $table->date('startof_availability_date');
            $table->date('endof_availability_date');
            $table->integer('price');
            $table->integer('passenger_number');
            $table->integer('truck_number');
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
        Schema::dropIfExists('searches');
    }
}
