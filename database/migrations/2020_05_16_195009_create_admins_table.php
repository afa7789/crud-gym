<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //$table->string('social_id')->nullable();;
        Schema::create('admins', function (Blueprint $table) {
            $table->id('id');
            $table->timestamps();
            $table->string('email',100)->nullable();
            $table->string('name',100)->nullable();
            $table->text('password')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
