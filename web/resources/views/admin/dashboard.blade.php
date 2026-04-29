@extends('layouts.app')

@section('usuario_tipo', 'Administrador') 

@section('menu')
    
    <a href="/admin/dashboard" class="nav-link-custom bg-light">
        <i class="fas fa-tachometer-alt me-2 text-roxo"></i> Dashboard
    </a>
    <a href="#" class="nav-link-custom">
        <i class="fas fa-users me-2 text-roxo"></i> Gerenciar Usuários
    </a>
    <a href="#" class="nav-link-custom">
        <i class="fas fa-chart-line me-2 text-roxo"></i> Relatórios
    </a>
    <a href="/" class="nav-link-custom text-danger border-top mt-2">
        <i class="fas fa-sign-out-alt me-2"></i> Sair do Sistema
    </a>
@endsection

@section('content')
<style>
    
    :root {
        --rota-purple: #6f42c1;
        --rota-purple-dark: #5a32a3;
    }
    
    .text-roxo { color: var(--rota-purple) !important; }
    .bg-roxo { background-color: var(--rota-purple) !important; color: white !important; }
    
    .card-admin {
        border: 2px solid #000 !important;
        border-radius: 12px;
        transition: all 0.3s ease;
        box-shadow: 5px 5px 0px #000;
        background: #fff;
    }
    
    .card-admin:hover {
        transform: translate(-2px, -2px);
        box-shadow: 8px 8px 0px #000;
    }

    .icon-box {
        border: 2px solid #000;
        width: 60px;
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 8px;
    }
</style>

<div class="row">
    <div class="col-lg-4 col-md-6 mb-4">
        <div class="card card-admin p-3 h-100">
            <div class="d-flex justify-content-between align-items-start">
                <div>
                    <h5 class="text-muted fw-bold small">EMPRESAS</h5>
                    <h2 class="display-6 fw-bold">12</h2>
                </div>
                <div class="icon-box bg-light text-dark">
                    <i class="fas fa-building fa-lg"></i>
                </div>
            </div>
            <div class="mt-auto">
                <hr class="border-dark">
                <a href="#" class="text-dark fw-bold text-uppercase small" style="text-decoration: none;">
                    Ver Parceiros <i class="fas fa-arrow-right ms-1"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-6 mb-4">
        <div class="card card-admin p-3 h-100 bg-roxo">
            <div class="d-flex justify-content-between align-items-start">
                <div>
                    <h5 class="fw-bold small" style="opacity: 0.8;">ENTREGADORES</h5>
                    <h2 class="display-6 fw-bold">45</h2>
                </div>
                <div class="icon-box bg-white">
                    <i class="fas fa-motorcycle fa-lg text-roxo"></i>
                </div>
            </div>
            <div class="mt-auto">
                <hr style="border-top: 1px solid rgba(255,255,255,0.4);">
                <a href="#" class="text-white fw-bold text-uppercase small" style="text-decoration: none;">
                    Gerenciar Equipe <i class="fas fa-arrow-right ms-1"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-6 mb-4">
        <div class="card card-admin p-3 h-100">
            <div class="d-flex justify-content-between align-items-start">
                <div>
                    <h5 class="text-muted fw-bold small">ENTREGAS </h5>
                    <h2 class="display-6 fw-bold">128</h2>
                </div>
                <div class="icon-box bg-light text-dark">
                    <i class="fas fa-box fa-lg"></i>
                </div>
            </div>
            <div class="mt-auto">
                <hr class="border-dark">
                <a href="#" class="text-dark fw-bold text-uppercase small" style="text-decoration: none;">
                    Monitorar Fluxo <i class="fas fa-arrow-right ms-1"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="card card-admin mt-4">
    <div class="card-header bg-white border-bottom border-dark py-3">
        <h5 class="fw-bold mb-0">Últimos Cadastros</h5>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead>
                    <tr class="bg-light">
                        <th class="border-dark">NOME</th>
                        <th class="border-dark">TIPO</th>
                        <th class="border-dark">DATA</th>
                        <th class="border-dark text-center">STATUS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="align-middle fw-bold">Restaurante Central</td>
                        <td class="align-middle">Empresa</td>
                        <td class="align-middle">29/04/2026</td>
                        <td class="text-center align-middle">
                            <span class="badge bg-success border border-dark px-3">ATIVO</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle fw-bold">Carlos Entregas</td>
                        <td class="align-middle">Entregador</td>
                        <td class="align-middle">29/04/2026</td>
                        <td class="text-center align-middle">
                            <span class="badge bg-warning border border-dark px-3 text-dark">PENDENTE</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection