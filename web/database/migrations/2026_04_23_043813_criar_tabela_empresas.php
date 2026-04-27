<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void {
    Schema::create('empresas', function (Blueprint $table) {
        $table->integer('id', true);
        $table->integer('usuario_id');
        $table->integer('endereco_id');
        $table->string('cnpj', 18)->unique();
        $table->string('telefone', 20);

        $table->foreign('usuario_id')->references('id')->on('usuarios')->onDelete('cascade');
        $table->foreign('endereco_id')->references('id')->on('enderecos');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
{
    Schema::dropIfExists('empresas');
}
};
