<!-- filepath: c:\projeto_laravel\meu-projeto\resources\views\livewire\filtro-pacotes.blade.php -->
<div>
    <div class="mb-4">
        <h4 class="mb-3">Filtrar Pacotes</h4>
        <div class="row g-3">
            <!-- Filtro por Destino -->
            <div class="col-md-4">
                <input type="text" class="form-control" placeholder="Destino" wire:model.defer="destino">
            </div>

            <!-- Filtro por Data de Partida -->
            <div class="col-md-4">
                <input type="date" class="form-control" wire:model.defer="dataPartida">
            </div>

            <!-- Filtro por Preço Máximo -->
            <div class="col-md-4">
                <input type="number" class="form-control" placeholder="Preço Máximo" wire:model.defer="precoMaximo">
            </div>
            <!-- Botão para aplicar o filtro -->
        </div>
        
        <div class="row col-md-3 mt-3 text-center">
            <button class="btn btn-primary" wire:click="aplicarFiltro">Aplicar Filtro</button>
        </div>

    </div>
</div>
