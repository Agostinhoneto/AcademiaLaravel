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
       //     $table->integer('aluno_id');
            $table->string('titulo');
            $table->text('descricao');
            $table->string('serie');
            $table->string('repeticoes');
            $table->string('carga');
            $table->date('data_inicio');
            $table->date('data_fim');
            $table->timestamps();
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
