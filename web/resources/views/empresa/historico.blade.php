@extends('layouts.app')

@section('usuario_tipo', 'Empresa')

@section('menu')
    
    <a href="/empresa/dashboard" class="nav-link-custom">
        <i class="fas fa-home me-2 text-roxo"></i> Início
    </a>
    <a href="/empresa/historico" class="nav-link-custom bg-light">
        <i class="fas fa-history me-2 text-roxo"></i> Histórico
    </a>
    <a href="/" class="nav-link-custom text-danger">
        <i class="fas fa-sign-out-alt me-2"></i> Sair
    </a>
@endsection

@section('content')
<style>
    .card-historico-empresa {
        border: 2px solid #000 !important;
        border-radius: 12px;
        box-shadow: 4px 4px 0px #000;
        background: #fff;
    }
    .tabela-historico thead {
        background-color: #f4f6f9;
        border-bottom: 2px solid #000;
    }
    .badge-status {
        border: 1px solid #000;
        font-weight: bold;
        color: white !important;
    }
    .btn-detalhe-sm {
        border: 2px solid #000;
        background-color: #fff;
        color: #000;
        font-weight: bold;
        transition: 0.2s;
    }
    .btn-detalhe-sm:hover {
        background-color: var(--rota-purple);
        color: #fff;
        transform: translate(-2px, -2px);
        box-shadow: 2px 2px 0px #000;
    }
</style>

<h2 class="fw-bold mb-4"><i class="fas fa-history text-roxo"></i> Histórico de <span class="text-roxo">Envios</span></h2>

<div class="card card-historico-empresa shadow-sm">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0 tabela-historico">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Destinatário</th>
                        <th>Finalizado em</th>
                        <th>Valor</th>
                        <th>Status</th>
                        <th class="text-center">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="align-middle fw-bold">#001</td>
                        <td class="align-middle">João Silva</td>
                        <td class="align-middle">29/04/2026 - 15:45</td>
                        <td class="align-middle fw-bold text-roxo">R$ 25,00</td>
                        <td class="align-middle">
                            <span class="badge bg-success badge-status p-2">CONCLUÍDO</span>
                        </td>
                        <td class="text-center align-middle px-3">
                            <a href="/empresa/detalhe/1" class="btn btn-sm btn-detalhe-sm">
                                REVISAR
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle fw-bold">#002</td>
                        <td class="align-middle">Maria Oliveira</td>
                        <td class="align-middle">28/04/2026 - 10:20</td>
                        <td class="align-middle fw-bold text-roxo">R$ 18,00</td>
                        <td class="align-middle">
                            <span class="badge bg-danger badge-status p-2">CANCELADO</span>
                        </td>
                        <td class="text-center align-middle px-3">
                            <a href="/empresa/detalhe/2" class="btn btn-sm btn-detalhe-sm">
                                REVISAR
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection