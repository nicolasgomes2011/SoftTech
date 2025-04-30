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

    <!-- Inputmask Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/inputmask/5.0.8/inputmask.min.js"></script>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    @livewireStyles
    @livewireScripts

    <x-header></x-header>

    <div class="container py-5">
        <div class="container mb-5">
            <h1 class="text-center mb-4">Pacotes de Viagem</h1>
            <livewire:filtro-pacotes />
        </div>
    </div>

    <x-footer></x-footer>

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Apply the mask to the input field
        Inputmask({
            alias: "currency",
            prefix: "R$ ",
            groupSeparator: ".",
            radixPoint: ",",
            autoGroup: true,
            digits: 2,
            digitsOptional: false,
            placeholder: "0",
            removeMaskOnSubmit: true
        }).mask(document.getElementById('precoMaximo'));
    });
</script>
</body>

</html>

