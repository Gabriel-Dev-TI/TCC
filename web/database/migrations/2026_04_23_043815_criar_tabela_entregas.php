<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void {
    Schema::create('entregas', function (Blueprint $table) {
        $table->integer('id', true);
        $table->integer('empresa_id');
        $table->integer('entregador_id')->nullable();
        $table->integer('endereco_origem_id');
        $table->integer('endereco_destino_id');
        $table->enum('status', ['pendente','em_transito', 'concluido', 'cancelado'])->default('pendente');
        $table->decimal('preco', 10, 2);
        $table->text('observacoes')->nullable();
        $table->timestamp('criado_em')->useCurrent();

        $table->foreign('empresa_id')->references('id')->on('empresas');
        $table->foreign('entregador_id')->references('id')->on('entregadores');
        $table->foreign('endereco_origem_id')->references('id')->on('enderecos');
        $table->foreign('endereco_destino_id')->references('id')->on('enderecos');
    });
}

    
    public function down(): void
{
    Schema::dropIfExists('entregas');
}
};
