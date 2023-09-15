<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treinos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('descricao');
            $table->text('duracao');
            $table->string('serie');
            $table->string('repeticoes');
            $table->string('carga');
            $table->date('data_inicio');
            $table->date('data_fim');
            $table->timestamps();
            $table->unsignedBigInteger('instrutores_id');
            $table->foreign('instrutores_id')->references('id')->on('instrutores');

            $table->unsignedBigInteger('grupo_musculares_id');
            $table->foreign('grupo_musculares_id')->references('id')->on('grupos_musculares');

            $table->unsignedBigInteger('aluno_id');
            $table->foreign('aluno_id')->references('id')->on('alunos');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('treino');
    }
};
