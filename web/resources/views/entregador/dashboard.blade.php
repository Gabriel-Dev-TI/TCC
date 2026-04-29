@extends('layouts.app')

@section('usuario_tipo', 'Entregador') 
@section('menu')
    
    <a href="/entregador/dashboard" class="nav-link-custom bg-light">
        <i class="fas fa-box me-2 text-roxo"></i> Disponíveis
    </a>
    <a href="/entregador/historico" class="nav-link-custom">
        <i class="fas fa-history me-2 text-roxo"></i> Meu Histórico
    </a>
    <a href="/" class="nav-link-custom text-danger border-top mt-2">
        <i class="fas fa-sign-out-alt me-2"></i> Sair
    </a>
@endsection

@section('content')
<h2 class="fw-bold mb-4">Entregas <span class="text-roxo">Disponíveis</span></h2>

<div class="card border-dark shadow-sm" style="border-radius: 15px; border: 2px solid #000 !important;">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead class="bg-light">
                    <tr class="border-bottom border-dark">
                        <th>Origem</th>
                        <th>Destino</th>
                        <th>Valor</th>
                        <th class="text-center">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="align-middle"><strong>Loja X</strong></td>
                        <td class="align-middle">Cliente Y</td>
                        <td class="align-middle text-success fw-bold">R$ 20,00</td>
                        <td class="text-center">
                            <button class="btn btn-roxo fw-bold border-dark px-4" style="background-color: #6f42c1; color: white; border: 2px solid #000;">
                                ACEITAR
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection