@extends('layouts.app')

@section('usuario_tipo', 'Empresa')

@section('menu')
    <a href="/empresa/dashboard" class="nav-link-custom">
        <i class="fas fa-home me-2 text-roxo"></i> Início
    </a>
    <a href="/empresa/historico" class="nav-link-custom">
        <i class="fas fa-history me-2 text-roxo"></i> Histórico
    </a>
    <a href="/" class="nav-link-custom text-danger border-top mt-2">
        <i class="fas fa-sign-out-alt me-2"></i> Sair
    </a>
@endsection

@section('content')
<style>
    .card-form { border: 2px solid #000; border-radius: 15px; box-shadow: 6px 6px 0px #000; background: #fff; }
    .form-label { font-weight: 800; text-transform: uppercase; font-size: 0.75rem; color: #333; }
    .form-control, .form-select { border: 2px solid #000 !important; border-radius: 10px !important; padding: 10px; font-weight: 600; }
    .btn-enviar { background: #6f42c1; color: #fff; border: 2px solid #000; border-radius: 12px; padding: 15px; font-weight: 900; width: 100%; box-shadow: 4px 4px 0px #000; }
</style>

<div class="row justify-content-center">
    <div class="col-md-8">
        <h2 class="fw-bold mb-4 text-center text-roxo">SOLICITAR ENTREGA</h2>
        
        <div class="card card-form p-4 mb-5">
            <form action="/empresa/salvar" method="POST">
                @csrf
                
                <h5 class="fw-bold mb-3 border-bottom border-dark pb-2">📍 ENDEREÇO DE DESTINO</h5>
                
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label class="form-label">CEP</label>
                        <input type="text" name="cep" class="form-control" placeholder="00000-000" required>
                    </div>
                    <div class="col-md-8 mb-3">
                        <label class="form-label">Logradouro (Rua/Av)</label>
                        <input type="text" name="logradouro" class="form-control" placeholder="Ex: Rua das Flores" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label class="form-label">Número</label>
                        <input type="text" name="numero" class="form-control" placeholder="123" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Bairro</label>
                        <input type="text" name="bairro" class="form-control" placeholder="Centro" required>
                    </div>
                    <div class="col-md-5 mb-3">
                        <label class="form-label">Complemento</label>
                        <input type="text" name="complemento" class="form-control" placeholder="Apto, Bloco...">
                    </div>
                </div>

                <div class="row mb-4">
                    <div class="col-md-8 mb-3">
                        <label class="form-label">Cidade</label>
                        <input type="text" name="cidade" class="form-control" placeholder="Sua Cidade" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Estado </label>
                        <input type="text" name="estado" class="form-control" placeholder="UF" required>
                    </div>
                </div>

                <h5 class="fw-bold mb-3 border-bottom border-dark pb-2">💰 DETALHES</h5>

                <div class="row mb-4">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Preço da Entrega (R$)</label>
                        <input type="number" name="preco" class="form-control" step="0.01" placeholder="20,00" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Observações</label>
                        <textarea name="observacoes" class="form-control" rows="1" placeholder="Recado para o entregador"></textarea>
                    </div>
                </div>

                <button type="submit" class="btn btn-enviar">CHAMAR ENTREGADOR AGORA</button>
            </form>
        </div>
    </div>
</div>
@endsection