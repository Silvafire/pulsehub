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
        Schema::create('plano', function (Blueprint $table) {
            $table->id();
            $table->string('Series');
            $table->datetime('Duracao_Total');
            $table->datetime('Tmp_Exercicio');
            $table->string('Repeticoes');
            $table->unsignedBigInteger('modalidades_id'); // Chave estrangeira
            $table->foreign('modalidades_id')->references('id')->on('modalidades');
            $table->softDeletes(); // Adiciona a coluna deleted_at para soft deletes
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plano');
    }
};
