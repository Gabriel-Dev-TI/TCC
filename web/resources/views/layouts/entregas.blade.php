@extends('layouts.admin')

@section('conteudo')
<h1 class="h3 mb-2 text-gray-800">Gerenciamento de Entregas</h1>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Entregas em Andamento</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Empresa</th>
                        <th>Entregador</th>
                        <th>Destino</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#1024</td>
                        <td>Pizzaria do Bairro</td>
                        <td>Gabriel Entregador</td>
                        <td>Rua das Flores, 123</td>
                        <td><span class="badge badge-info">Em rota</span></td>
                    </tr>
                    <tr>
                        <td>#1025</td>
                        <td>Farmácia Saúde</td>
                        <td>Ricardo Silva</td>
                        <td>Av. Central, 500</td>
                        <td><span class="badge badge-warning">Aguardando Coleta</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection