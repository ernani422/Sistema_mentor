<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('turma_matriculas', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('aluno_id')->unsigned();
            $table->foreign('aluno_id')->references('id')->on('alunos');

            $table->bigInteger('turma_id')->unsigned();
            $table->foreign('turma_id')->references('id')->on('turmas');
            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('turma_matriculas');
    }
};
