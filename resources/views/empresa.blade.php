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

         <!-- Seção adicional: Sobre Nós -->
            <x-sobre-nos></x-sobre-nos>

        <!-- Seção principal: Quem Somos -->
        <div class="container mb-5">
            <h1 class="text-center mb-4">Nossa História</h1>
            
            <p class="text-muted text-center">
                Nosso time é composto por <strong>25 funcionários diretos</strong>, que trabalham diariamente para entregar excelência em nossos serviços, 
                além de contar com o apoio de <strong>10 profissionais indiretos</strong>, incluindo freelancers e parceiros estratégicos. 
                Juntos, formamos uma equipe dedicada e apaixonada por criar experiências únicas para nossos clientes.
            </p>
            <p class="text-muted text-center">
                Na SoftTech, acreditamos que a tecnologia é a chave para conectar pessoas e destinos. Por isso, desenvolvemos ferramentas que ajudam 
                viajantes a planejar suas viagens de forma prática e segura, enquanto apoiamos empresas do setor a expandirem seus negócios.
            </p>
            <p class="text-muted text-center">
                Nosso compromisso é com a <strong>inovação</strong>, a <strong>qualidade</strong> e a <strong>satisfação</strong> de nossos clientes. 
                Estamos sempre em busca de novas ideias e parcerias para continuar crescendo e contribuindo para o desenvolvimento do turismo no Brasil e no mundo.
            </p>
        </div>

       
    </div>

    <x-footer></x-footer>

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>