<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome',150);
            $table->string('nome_do_pai',150);
            $table->string('nome_da_mae',150);
            $table->date('data_de_nascimento');
            $table->integer('peso_nascimento');
            $table->string('local_do_parto',150);
            $table->string('sexo',['M','F']);
            $table->string('tipo_de_parto',150);
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
        Schema::dropIfExists('pacientes');
    }
}
