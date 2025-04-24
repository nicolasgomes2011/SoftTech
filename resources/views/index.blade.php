<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>SoftTech Turismo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    @livewireStyles
    <script src="//unpkg.com/alpinejs" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        body {
            font-family: sans-serif;
            background: #f5f5f5;
        }
    </style>
</head>

<body>


    <x-header></x-header>

    <section class="hero d-flex align-items-center text-white position-relative" style="background: url('{{asset("images/banner/portico-de-gramado.png")}}') center center/cover no-repeat; height: 100vh;" >
        <!-- Overlay escuro -->
        <div class="overlay position-absolute top-0 start-0 w-100 h-100"
            style="background-color: rgba(0, 0, 0, 0.5); z-index: 1;"></div>

        <!-- Conteúdo -->
        <div class="container text-center position-relative" style="z-index: 2;">
            <h1 class="display-4 fw-bold">Descubra Gramado com a SoftTech</h1>
            <p class="lead mt-3">Pacotes personalizados para cada estilo de viagem</p>
            <a href="pacotes" class="btn btn-light btn-lg mt-4 shadow">Ver Pacotes</a>
        </div>
    </section>

    <section id="pacotes" class="py-5 bg-light">
        <div class="container text-center">
            <h2 class="mb-4">Nossos Pacotes</h2>
            <p class="mb-5">Escolha o pacote ideal para sua experiência inesquecível em Gramado</p>

            <div class="row g-4">
                <!-- Pacote Romântico -->
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <i class="bi bi-heart-fill fs-1 text-danger mb-3"></i>
                            <h5 class="card-title">Pacote Romântico</h5>
                            <p class="card-text">Perfeito para casais apaixonados curtirem momentos especiais.</p>
                            <a href="#" class="btn btn-primary">Saiba Mais</a>
                        </div>
                    </div>
                </div>

                <!-- Pacote Família -->
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <i class="bi bi-people-fill fs-1 text-warning mb-3"></i>
                            <h5 class="card-title">Pacote Família</h5>
                            <p class="card-text">Diversão garantida para todas as idades, com conforto e segurança.</p>
                            <a href="#" class="btn btn-primary">Saiba Mais</a>
                        </div>
                    </div>
                </div>

                <!-- Pacote Aventura -->
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <i class="bi bi-tree-fill fs-1 text-success mb-3"></i>
                            <h5 class="card-title">Pacote Aventura</h5>
                            <p class="card-text">Trilhas, parques e muita adrenalina em meio à natureza.</p>
                            <a href="#" class="btn btn-primary">Saiba Mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 bg-white">
        <div class="container text-center">
            <h2 class="mb-4">Por que escolher a SoftTech Turismo?</h2>
            <p class="mb-5">Mais do que viagens, oferecemos experiências com tecnologia, carinho e atenção aos detalhes.
            </p>

            <div class="row g-4">
                <div class="col-md-4">
                    <i class="bi bi-cpu-fill fs-1 text-primary mb-3"></i>
                    <h5>Gestão Inteligente</h5>
                    <p>Nosso sistema ERP exclusivo garante agilidade e organização em todas as etapas da sua viagem.</p>
                </div>

                <div class="col-md-4">
                    <i class="bi bi-person-check-fill fs-1 text-success mb-3"></i>
                    <h5>Atendimento Personalizado</h5>
                    <p>Entendemos o que você precisa e criamos roteiros sob medida para você e sua família.</p>
                </div>

                <div class="col-md-4">
                    <i class="bi bi-shield-check fs-1 text-warning mb-3"></i>
                    <h5>Confiança e Segurança</h5>
                    <p>Mais de 10 anos entregando viagens inesquecíveis com total transparência e segurança.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- ABOUT US SECTION --}}
    <x-sobre-nos></x-sobre-nos>


    {{-- CONTACT SECTION --}}
    @livewire('contato')

    {{-- FOOTER --}}
   <x-footer></x-footer>

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @livewireScripts
</body>

</html>