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
        Schema::create('aluno_tem_eventos', function (Blueprint $table) {
            $table->bigInteger('aluno_id')->unsigned();
            $table->bigInteger('evento_id')->unsigned();

            $table->foreign('aluno_id')
                ->references('id')->on('alunos')
                ->onDelete('cascade');
            
            $table->foreign('evento_id')
                ->references('id')->on('eventos')
                ->onDelete('cascade'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aluno_tem_eventos');
    }
};
