<!-- filepath: c:\projeto_laravel\meu-projeto\resources\views\paginas\pacotes.blade.php -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Pacotes de Viagem - SoftTech Turismo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    @livewireStyles
    @livewireScripts

    <x-header></x-header>

    <div class="container py-5">
        <div class="container mb-5">
            <h1 class="text-center mb-4">Nossos Serviços</h1>
            <p class="text-center">
                O que a nossa empresa oferece:
            </p>

            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <i class="bi bi-briefcase"></i> Pacotes na Mão Gestão fácil de itinerários
                </li>
                <li class="list-group-item">
                    <i class="bi bi-lightning-charge"></i> Reserva Instantânea
                </li>
                <li class="list-group-item">
                    <i class="bi bi-receipt"></i> Vouchers online na hora
                </li>
                <li class="list-group-item">
                    <i class="bi bi-diagram-3"></i> CRM Integrado
                </li>
                <li class="list-group-item">
                    <i class="bi bi-collection"></i> Tudo organizado num só lugar
                </li>
                <li class="list-group-item">
                    <i class="bi bi-chat-dots"></i> Chatbot 24/7 Suporte sempre ativo
                </li>
                <li class="list-group-item">
                    <i class="bi bi-graph-up-arrow"></i> Análise de Dados Insights pra otimizar tours
                </li>
            </ul>
        </div>
    </div>
    <div class="container mb-5">
        <div class="container">
            <h1 class="text-center mb-4">Principais Fornecedores</h1>
            <p class="text-center">
                Para garantir a qualidade da nossa plataforma, contamos com fornecedores como:
            </p>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <i class="bi bi-building"></i> Empresas de hospedagem e passeios turísticos locais
                </li>
                <li class="list-group-item">
                    <i class="bi bi-credit-card"></i> Plataformas de pagamento online, como PagSeguro, PayPal e Stripe
                </li>
                <li class="list-group-item">
                    <i class="bi bi-cloud"></i> Serviços de hospedagem na nuvem, como AWS e Google Cloud
                </li>
            </ul>
        </div>
    </div>

    <x-footer></x-footer>

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>