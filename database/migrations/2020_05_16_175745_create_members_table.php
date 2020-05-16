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
            $table->text('password');
            $table->string('phone_number',15);
            $table->string('social_id');
            $table->text('address');
            $table->text('description');
            $table->string('instagram',100);
            $table->string('twitter',100);
            $table->string('facebook',100);
            $table->string('facebook',100);
            $table->date('birth_date');
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
