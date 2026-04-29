@extends('layouts.app')

@section('usuario_tipo', 'Entregador')

@section('menu')
    <a href="/entregador/dashboard" class="nav-link-custom">
        <i class="fas fa-box me-2 text-roxo"></i> Disponíveis
    </a>
    <a href="/entregador/historico" class="nav-link-custom bg-light">
        <i class="fas fa-history me-2 text-roxo"></i> Meu Histórico
    </a>
    <a href="/" class="nav-link-custom text-danger border-top mt-2">
        <i class="fas fa-sign-out-alt me-2"></i> Sair
    </a>
@endsection

@section('content')
<h2 class="fw-bold mb-4">Meu <span class="text-roxo">Histórico</span></h2>

<div class="card border-dark shadow-sm" style="border-radius: 15px; border: 2px solid #000 !important;">
    <div class="card-body p-0">
        <table class="table table-hover mb-0">
            <thead class="bg-light">
                <tr class="border-bottom border-dark">
                    <th>ID</th>
                    <th>Status</th>
                    <th>Data</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="fw-bold">#1</td>
                    <td><span class="badge bg-success border border-dark">Concluído</span></td>
                    <td>29/04/2026</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection