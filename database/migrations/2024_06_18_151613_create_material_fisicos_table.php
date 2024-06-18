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
        Schema::create('material_fisicos', function (Blueprint $table) {
            $table->id();
            $table->string('descricao');
            $table->integer('quantidade');
            $table->foreignId('infraestrutura_id')->references('id')->on('infraestruturas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('material_fisicos');
    }
};
