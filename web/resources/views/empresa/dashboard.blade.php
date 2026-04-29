@extends('layouts.app')

@section('usuario_tipo', 'Empresa') {{-- Isso faz aparecer "Olá, Empresa" --}}

@section('menu')
    <a href="/empresa/dashboard" class="nav-link-custom">
        <i class="fas fa-home me-2 text-roxo"></i> Início
    </a>
    <a href="/empresa/historico" class="nav-link-custom">
        <i class="fas fa-history me-2 text-roxo"></i> Histórico
    </a>
    <a href="/" class="nav-link-custom text-danger">
        <i class="fas fa-sign-out-alt me-2"></i> Sair
    </a>
@endsection

@section('content')
    <style>
        .btn-massive {
            background-color: #6f42c1;
            color: white;
            border: 3px solid #000;
            border-radius: 15px;
            padding: 35px;
            font-size: 1.5rem;
            font-weight: 900;
            display: block;
            text-align: center;
            box-shadow: 6px 6px 0px #000;
            text-decoration: none !important;
            margin-top: 10px;
        }
        .btn-massive:active {
            transform: translate(3px, 3px);
            box-shadow: 0px 0px 0px #000;
        }
    </style>

    <a href="/empresa/criar" class="btn-massive">
        <i class="fas fa-plus-circle me-2"></i> NOVA ENTREGA
    </a>

    <h5 class="fw-bold mt-5 mb-3 text-uppercase" style="border-left: 5px solid #6f42c1; padding-left: 10px;">
        Entregas Ativas
    </h5>
    
    <div class="card p-3 shadow-sm border-dark">
        <p class="mb-0">Nenhuma entrega em andamento no momento.</p>
    </div>
@endsection