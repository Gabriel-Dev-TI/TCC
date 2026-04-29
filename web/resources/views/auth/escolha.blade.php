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

<div class="text-center mt-5">
    
  <img src="{{ asset('images/logoRotaJa.png') }}" width="400">
<div class= "m-4">
 <p class="fs-2">Conectamos quem envia com quem entrega.</p>
 <p class = "text-muted">Entregas mais rápidas, seguras e eficientes para todos</p>
 
  </div>
 

  <a href="/login?tipo=entregador" class="btn btn-blue m-3 p-3 px-5" style="background-color: blue; color: white;">
        Sou Entregador
    </a>
    <a href="/login?tipo=empresa" class="btn btn-light border-dark text-dark  m-3 p-3 px-5">
        Sou Empresa
    </a>

    
</div>
@endsection