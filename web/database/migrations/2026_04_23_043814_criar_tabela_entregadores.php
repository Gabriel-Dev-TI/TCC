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
    Schema::create('entregadores', function (Blueprint $table) {
        $table->integer('id', true);
        $table->integer('usuario_id');
        $table->string('cpf', 14)->unique();
        $table->enum('tipo_veiculo', ['carro', 'moto', 'bike']);
        $table->boolean('disponivel')->default(true);

        $table->foreign('usuario_id')->references('id')->on('usuarios')->onDelete('cascade');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
{
    Schema::dropIfExists('entregadores');
}
};
