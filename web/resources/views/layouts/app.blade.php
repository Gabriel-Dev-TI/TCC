<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>RotaJá</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/all.min.css">

    <style>
        :root { --rota-purple: #6f42c1; }
        
        body { background-color: #f8f9fa; }

        .app-bar {
            border-bottom: 2px solid #000;
            background: #fff;
            padding: 10px 20px;
        }

        .offcanvas {
            border-right: 3px solid #000 !important;
            width: 280px !important;
        }

        .text-roxo { color: var(--rota-purple) !important; }
        
        .nav-link-custom {
            color: #000;
            font-weight: 700;
            padding: 15px;
            border-bottom: 1px solid #eee;
            display: block;
            text-decoration: none;
        }

        .nav-link-custom:hover {
            background-color: #f4f4f4;
            color: var(--rota-purple);
        }

        .btn-sino {
            color: #000;
            font-size: 1.5rem;
            background: none;
            border: none;
            position: relative;
        }
    </style>
</head>
<body>

    <nav class="app-bar d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center">
            <button class="btn p-0 me-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#menuLateral">
                <i class="fas fa-bars fa-2x"></i>
            </button>
            <h4 class="mb-0 fw-bold">Olá, <span class="text-roxo">@yield('usuario_tipo')</span></h4>
        </div>

        <div>
            <button class="btn-sino">
                <i class="fas fa-bell"></i>
            </button>
        </div>
    </nav>

    <div class="offcanvas offcanvas-start" tabindex="-1" id="menuLateral">
        <div class="offcanvas-header border-bottom border-dark">
            <img src="{{ asset('images/logoRotaJa.png') }}" width="200">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body p-0">
            <nav>
                @yield('menu')
            </nav>
        </div>
    </div>

    <main class="p-4">
        @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>