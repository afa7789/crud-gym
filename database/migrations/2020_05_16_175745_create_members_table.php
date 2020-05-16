<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->timestamps();
            $table->id('id');
            $table->primary('id');
            $table->string('social_id')->unique();
            $table->string('email',100)->unique();
            $table->string('name',100);
            $table->date('birth_date');
            $table->text('password');
            $table->string('phone_number',15);
            $table->text('address')->nullable();
            $table->text('description')->nullable();
            $table->string('instagram',50)->nullable();
            $table->string('twitter',50)->nullable();
            $table->string('facebook',50)->nullable();
            $table->binary('image')->nullable();//   <img src="data:image/jpeg;base64,'.base64_encode( $imageBlob ).'"/>
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
