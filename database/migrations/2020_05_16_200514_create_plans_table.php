<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->id('id');
            $table->timestamps();
            $table->string('name',20);
            $table->unsignedBigInteger('type_id');
            $table->foreign('type_id')->references('id')->on('plan_types');
            $table->bigInteger('quantity');
            $table->float('value',6,2);
            $table->bigInteger('tolerance');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plans');
    }
}
