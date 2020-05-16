<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plan_types', function (Blueprint $table) {
            $table->id('plan_types_id');
            $table->timestamps();
            $table->string('type')->nullable();
            /*NSERT INTO 'tipo_plano' ('id','tipo')
VALUES
    (1, 'Diario'),
    (2, 'Semanal'),
    (3, 'Mensal'),
    (4, 'Anual'),
    (5, 'Livre'),
    (6, 'Colaborador'),
    (7, 'Sem Plano');*/

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plan_types');
    }
}
