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
        Schema::create('turma_tem_alunos', function (Blueprint $table) {
            $table->bigInteger('turma_id')->unsigned();
            $table->bigInteger('aluno_id')->unsigned();
            $table->text('frequencia')->nullable(true);

            $table->foreign('turma_id')
                ->references('id')->on('turmas')
                ->onDelete('cascade');

            $table->foreign('aluno_id')
                ->references('id')->on('alunos')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('turma_tem_alunos');
    }
};
