<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFrequenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()

    /*DROP TABLE IF EXISTS 'frequencia';
CREATE TABLE
IF NOT EXISTS 'frequencia'
(
'matricula' INTEGER NOT NULL,
'data_freq' DATE NOT NULL,
'contador' INTEGER NOT NULL,
CONSTRAINT FOREIGN KEY
('matricula') REFERENCES 'usuario'
('matricula')

);*/

    {
        Schema::create('frequencies', function (Blueprint $table) {
            $table->id('frequencies_id');
            $table->foreignid('id');
            $table->timestamps();
            $table->date('date_frequencies')->nullable();
            $table->bigInteger('counter')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('frequencies');
    }
}
