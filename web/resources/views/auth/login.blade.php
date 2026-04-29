@extends('layouts.app')

@section('content')
<style>
    /* Esconde o AppBar e a Sidebar */
    .app-bar, .offcanvas, button[data-bs-toggle="offcanvas"] { 
        display: none !important; 
    }
    /* Remove o espaçamento do topo que o layout base pode ter */
    main { padding-top: 0 !important; }
</style>

<div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="card p-5 shadow-sm" style="width: 100%; max-width: 500px; border-radius: 15px;">
        
        <div class="text-center mb-4">
            <h3 class="fw-bold">Login</h3>
            <a href="/" class="badge rounded-pill bg-light border text-dark p-2 px-3" style="text-decoration: none;">
                Perfil selecionado: <strong>{{ ucfirst(request('tipo', 'Usuário')) }}</strong>
                <i class="fas fa-sync-alt ml-1" style="font-size: 0.8rem;"></i>
            </a>
        </div>

        <form method="GET" action="/{{ request('tipo') == 'empresa' ? 'empresa' : 'entregador' }}/dashboard">
            @csrf

            <input type="hidden" name="tipo" value="{{ request('tipo') }}">

            <div class="form-group mb-4">
                <label class="form-label">E-mail</label>
                <input type="email" class="form-control form-control-lg border-dark" name="email" placeholder="seu@email.com" required>
            </div>

            <div class="form-group mb-4">
                <label class="form-label">Senha</label>
                <input type="password" class="form-control form-control-lg border-dark" name="senha" placeholder="********" required>
            </div>

            <div class="d-grid gap-2 mt-5 text-center">
                <button type="submit" class="btn btn-primary p-3 px-5 fw-bold" style="background-color: blue; color: white; border: none; width: 100%;">
                    ENTRAR COMO {{ strtoupper(request('tipo')) }}
                </button>
                
                
            </div>
        </form>
    </div>
</div>
@endsection