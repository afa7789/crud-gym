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
            $table->id('plans_id');
            $table->primary('plans_id');
            $table->timestamps();
            $table->string('name',100)->nullable();
            $table->string('type',100)->nullable();
            $table->bigInteger('quantity')->nullable();
            $table->float('value',8,2)->nullable();
            $table->bigInteger('tolerance')->nullable();
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
