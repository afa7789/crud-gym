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
            $table->id('members_id');
            $table->primary('merbers_id');
            $table->string('email',100)->unique();
            $table->string('name',100);
            $table->date('birth_date');
            $table->text('password');
            $table->string('phone_number',15);
            $table->string('social_id')->nullable();;
            $table->text('address')->nullable();;
            $table->text('description')->nullable();;
            $table->string('instagram',100)->nullable();
            $table->string('twitter',100)->nullable();
            $table->string('facebook',100)->nullable();
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
