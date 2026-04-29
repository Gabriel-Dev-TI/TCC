@extends('layouts.app')

@section('usuario_tipo', 'Empresa')

{{-- Valores de teste --}}
@php
    if (!isset($entrega)) {
        $entrega = (object)[
            'id' => '1290',
            'status' => 'concluido',
            'preco' => 25.00,
            'criado_em' => now(),
            'observacoes' => 'Cuidado, pacote frágil. Tocar o interfone 201.',
            'enderecoOrigem' => (object)[
                'logradouro' => 'Rua das Indústrias',
                'numero' => '500',
                'bairro' => 'Distrito Industrial',
                'cidade' => 'São Paulo',
                'estado' => 'SP'
            ],
            'enderecoDestino' => (object)[
                'logradouro' => 'Avenida Paulista',
                'numero' => '1000',
                'bairro' => 'Bela Vista',
                'cidade' => 'São Paulo',
                'estado' => 'SP',
                'complemento' => 'Apto 42 - Bloco B'
            ],
            'entregador' => (object)[
                'tipo_veiculo' => 'moto',
                'usuario' => (object)['nome' => 'Marcos Relâmpago']
            ]
        ];
    }
@endphp

@section('menu')
    <a href="/empresa/dashboard" class="nav-link-custom">
        <i class="fas fa-home me-2 text-roxo"></i> Início
    </a>
    <a href="/empresa/historico" class="nav-link-custom bg-light">
        <i class="fas fa-history me-2 text-roxo"></i> Histórico
    </a>
    <a href="/" class="nav-link-custom text-danger border-top mt-2">
        <i class="fas fa-sign-out-alt me-2"></i> Sair
    </a>
@endsection

@section('content')
<style>
    .card-detalhe { border: 2px solid #000 !important; border-radius: 15px; box-shadow: 6px 6px 0px #000; background: #fff; }
    .info-label { font-weight: 800; text-transform: uppercase; font-size: 0.75rem; color: #666; display: block; margin-bottom: 5px; }
    .info-value { font-size: 1.1rem; font-weight: 700; color: #000; margin-bottom: 20px; line-height: 1.4; }
    .badge-status-detalhe { border: 2px solid #000; padding: 10px 20px; font-size: 0.9rem; text-transform: uppercase; font-weight: 900; }
    .status-pendente { background-color: #ffc107; color: #000; }
    .status-em_transito { background-color: #6f42c1; color: #fff; }
    .status-concluido { background-color: #28a745; color: #fff; }
    .status-cancelado { background-color: #dc3545; color: #fff; }
    .btn-voltar { border: 2px solid #000; background: #fff; font-weight: bold; color: #000; border-radius: 10px; padding: 10px 20px; text-decoration: none; display: inline-block; box-shadow: 3px 3px 0px #000; }
</style>

<div class="row justify-content-center">
    <div class="col-md-9">
        <div class="mb-4">
            <a href="/empresa/dashboard" class="btn-voltar">
                <i class="fas fa-arrow-left me-2"></i> VOLTAR
            </a>
        </div>

        <div class="card card-detalhe p-4">
            <div class="row border-bottom border-dark pb-3 mb-4">
                <div class="col-6">
                    <h4 class="fw-bold mb-0">ENTREGA <span class="text-roxo">#{{ $entrega->id }}</span></h4>
                    <small class="text-muted">Solicitada em: {{ is_string($entrega->criado_em) ? $entrega->criado_em : $entrega->criado_em->format('d/m/Y H:i') }}</small>
                </div>
                <div class="col-6 text-end">
                    <span class="badge badge-status-detalhe rounded-pill status-{{ $entrega->status }}">
                        <i class="fas fa-circle me-1 small"></i> {{ str_replace('_', ' ', $entrega->status) }}
                    </span>
                </div>
            </div>

            <div class="row">
                <div class="col-md-7">
                    <span class="info-label">📍 Origem (Coleta)</span>
                    <p class="info-value text-muted">
                        {{ $entrega->enderecoOrigem->logradouro }}, {{ $entrega->enderecoOrigem->numero }}<br>
                        {{ $entrega->enderecoOrigem->bairro }} - {{ $entrega->enderecoOrigem->cidade }}/{{ $entrega->enderecoOrigem->estado }}
                    </p>
                    
                    <span class="info-label">🏁 Destino (Entrega)</span>
                    <p class="info-value">
                        {{ $entrega->enderecoDestino->logradouro }}, {{ $entrega->enderecoDestino->numero }}<br>
                        {{ $entrega->enderecoDestino->bairro }} - {{ $entrega->enderecoDestino->cidade }}/{{ $entrega->enderecoDestino->estado }}<br>
                        <small class="text-roxo">{{ $entrega->enderecoDestino->complemento }}</small>
                    </p>
                </div>

                <div class="col-md-5 border-start border-dark ps-md-4">
                    <span class="info-label">💰 Valor da Corrida</span>
                    <p class="info-value text-success" style="font-size: 2rem;">R$ {{ number_format($entrega->preco, 2, ',', '.') }}</p>

                    <span class="info-label">👤 Entregador Designado</span>
                    <p class="info-value">
                        @if($entrega->entregador)
                            <i class="fas fa-motorcycle me-2 text-roxo"></i> {{ $entrega->entregador->usuario->nome }}<br>
                            <small class="text-muted">Veículo: {{ ucfirst($entrega->entregador->tipo_veiculo) }}</small>
                        @else
                            <span class="text-muted fw-normal italic">Aguardando entregador...</span>
                        @endif
                    </p>

                    @if($entrega->observacoes)
                        <span class="info-label">📝 Observações</span>
                        <p class="small fw-bold">{{ $entrega->observacoes }}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection