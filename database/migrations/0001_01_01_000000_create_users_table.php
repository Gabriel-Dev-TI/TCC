<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->integer('id', true); // TRUE define como Auto Increment
            $table->string('nome');
            $table->string('email')->unique();
            $table->string('senha');
            $table->enum('cargo', ['admin', 'empresa', 'entregador']);
            $table->timestamp('criado_em')->useCurrent();
        });
    }

    /**
     * Apagar a tabela de usuarios (caso precise reverter).
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};