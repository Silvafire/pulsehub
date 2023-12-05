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
        Schema::create('tipo_planos', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 100);
            $table->text('descricao');
            $table->string('imagem');
            $table->unsignedBigInteger('planos_id'); // Chave estrangeira
            $table->foreign('planos_id')->references('id')->on('planos');
            $table->softDeletes(); // Adiciona a coluna deleted_at para soft deletes
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipo_planos');
    }
};
