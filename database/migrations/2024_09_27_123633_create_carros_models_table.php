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
        Schema::create('carros_models', function (Blueprint $table) {
            $table->id();
            $table->string('carro', 255)->nullable(false);
            $table->string('placa', 12)->nullable(false);
            $table->string('ano', 12)->nullable(false);
            $table->string('modelo', 255)->nullable(false);
            $table->decimal('valor', 15,2)->nullable(false);
            $table->string('tipo', 255)->nullable(false);
            $table->string('marca', 255)->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carros_models');
    }
};
