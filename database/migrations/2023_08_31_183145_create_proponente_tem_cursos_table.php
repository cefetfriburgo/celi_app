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
        Schema::create('proponente_tem_cursos', function (Blueprint $table) {
            $table->timestamps();
            $table->bigInteger('proponente_id')->unsigned();
            $table->bigInteger('curso_id')->unsigned();

            $table->foreign('proponente_id')
                ->references('id')->on('proponentes')
                ->onDelete('cascade');

            $table->foreign('curso_id')
                ->references('id')->on('cursos')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proponente_tem_cursos');
    }
};
