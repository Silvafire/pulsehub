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
        Schema::create('image_services', function (Blueprint $table) {
            $table->id();
            $table->string('imagem');
            $table->unsignedBigInteger('service_id'); // Chave estrangeira
            $table->foreign('service_id')->references('id')->on('services'); // references
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('image_services');
    }
};
