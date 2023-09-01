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
        Schema::create('turma_tem_locals', function (Blueprint $table) {
            $table->timestamps();
            $table->bigInteger('turma_id')->unsigned();
            $table->bigInteger('local_id')->unsigned();

            $table->foreign('turma_id')
                ->references('id')->on('turmas')
                ->onDelete('cascade');

            $table->foreign('local_id')
                ->references('id')->on('locals')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('turma_tem_locals');
    }
};
