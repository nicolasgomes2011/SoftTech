<!-- filepath: c:\projeto_laravel\meu-projeto\resources\views\livewire\filtro-pacotes.blade.php -->
<div>
    <div class="mb-4">
        <h4 class="mb-3">Filtrar Pacotes</h4>
        <div class="row g-3 align-items-end">
            <!-- Filtro por Destino -->
            <div class="col-md-3">
                <input type="text" class="form-control" placeholder="Destino" wire:model.defer="destino">
            </div>

            <!-- Filtro por Data de Partida -->
            <div class="col-md-3">
                <input type="date" class="form-control" wire:model.defer="dataPartida">
            </div>

            <!-- Filtro por Preço Máximo -->
            <div class="col-md-3">
                <input type="text" id="precoMaximo" class="form-control" placeholder="Preço Máximo" wire:model.defer="precoMaximo">
            </div>

            <!-- Botões -->
            <div class="col-md-3 d-flex justify-content-end">
                <button class="btn btn-primary me-2" wire:click="aplicarFiltro">Filtrar</button>
                <button class="btn btn-secondary" wire:click="limparFiltro">Reiniciar</button>
            </div>
        </div>
    </div>

    <div class="row g-4">
        @forelse ($pacotes as $pacote)
            <div class="col-md-4">
                <x-card-pacote :pacote="$pacote" />
            </div>
        @empty
            <p class="text-center">Nenhum pacote encontrado com os filtros aplicados.</p>
        @endforelse
    </div>
</div>
