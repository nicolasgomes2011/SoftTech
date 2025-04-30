<!-- filepath: c:\projeto_laravel\meu-projeto\resources\views\components\card-pacote.blade.php -->
<div class="card h-100 shadow-sm border-0">
    <div class="position-relative">
        <!-- Display the package image -->
        <img src="http://localhost:8001/uploads/{{ $pacote->imagem }}" 
             onError='this.src="http://localhost:8001/uploads/pacote_nao_disponivel.png"' 
             class="card-img-top rounded-top img-fluid pacote-img" 
             alt="{{ $pacote->nome }}">
        <div class="badge bg-primary position-absolute top-0 start-0 m-2 px-3 py-2">
            R$ {{ number_format($pacote->preco, 2, ',', '.') }}
        </div>
    </div>
    <div class="card-body">
        <h5 class="card-title fw-bold text-primary">{{ $pacote->nome }}</h5>
        <p class="card-text text-muted mb-2">{{ $pacote->descricao }}</p>
        <p class="text-muted mb-1"><i class="bi bi-geo-alt-fill text-danger"></i> Destino: {{ $pacote->destino }}</p>
        <p class="text-muted mb-1"><i class="bi bi-calendar-event text-success"></i> Partida: {{ \Carbon\Carbon::parse($pacote->data_partida)->format('d/m/Y') }}</p>
        <p class="text-muted mb-3"><i class="bi bi-calendar-check text-info"></i> Retorno: {{ \Carbon\Carbon::parse($pacote->data_saida)->format('d/m/Y') }}</p>
        <a href="#" class="btn btn-outline-primary w-100">Saiba Mais</a>
    </div>
</div>

<style>
    .pacote-img {
        height: 200px; /* Define a fixed height */
        width: 100%; /* Ensures the image spans the full width of the card */
        object-fit: cover; /* Ensures the image is cropped proportionally */
    }
</style>