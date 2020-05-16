<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberEntrancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*DROP TABLE IF EXISTS 'entrada_usuario';
CREATE TABLE
IF NOT EXISTS 'entrada_usuario'
(
'matricula' INTEGER NOT NULL,
'ano' INTEGER NOT NULL,
'mes' INTEGER NOT NULL,
'semana' INTEGER NOT NULL,
'dia' INTEGER NOT NULL,
CONSTRAINT FOREIGN KEY
('matricula') REFERENCES 'usuario'
('matricula')
);*/
        Schema::create('member_entrances', function (Blueprint $table) {
            $table->id('member_entrances_id');
            $table->foreignId('id');
            $table->bigInteger('year')->nullable();
            $table->bigInteger('month')->nullable();
            $table->bigInteger('week')->nullable();
            $table->bigInteger('day')->nullable();
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
        Schema::dropIfExists('member_entrances');
    }
}
