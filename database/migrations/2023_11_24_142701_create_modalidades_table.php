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
        Schema::create('modalidades', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 45);
            $table->text('descricao');
            $table->string('imagem');
            /*
            $table->unsignedBigInteger('staff_id');
            $table->foreign('staff_id')->references('id')->on('staff');
            */
            $table->unsignedBigInteger('tipo_eventos_mod_id'); // Chave estrangeira
            $table->foreign('tipo_eventos_mod_id')->references('id')->on('tipo_eventos_mod');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modalidades');
    }
};
