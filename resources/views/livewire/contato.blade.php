<!-- filepath: c:\projeto_laravel\meu-projeto\resources\views\livewire\contato.blade.php -->
<div class="container py-5">
    <h2 class="text-center mb-4">Entre em Contato</h2>
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form wire:submit.prevent="submit">
        <div class="row">
            <!-- Nome -->
            <div class="mb-3 col-md-6">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" id="nome" class="form-control" wire:model="nome" placeholder="Digite seu nome">
                @error('nome') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <!-- E-mail -->
            <div class="mb-3 col-md-6">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" id="email" class="form-control" wire:model="email" placeholder="Digite seu e-mail">
                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="row">
            <!-- Telefone -->
            <div class="mb-3 col-md-6">
                <label for="telefone" class="form-label">Telefone</label>
                <input type="text" id="telefone" class="form-control" wire:model="telefone" placeholder="Digite seu telefone">
                @error('telefone') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <!-- Assunto -->
            <div class="mb-3 col-md-6">
                <label for="assunto" class="form-label">Assunto</label>
                <select id="assunto" class="form-select" wire:model="assunto">
                    <option value="">Selecione um assunto</option>
                    <option value="orcamento">Orçamento</option>
                    <option value="duvida">Dúvida</option>
                    <option value="sugestao">Sugestão</option>
                    <option value="reclamacao">Reclamação</option>
                </select>
                @error('assunto') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="row">
            <!-- Interesse -->
            <div class="mb-3 col-md-6">
                <label for="interesse" class="form-label">Destino ou Produto de Interesse</label>
                <input type="text" id="interesse" class="form-control" wire:model="interesse" placeholder="Ex: Pacote para Gramado, aluguel de van...">
                @error('interesse') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <!-- Data Desejada -->
            <div class="mb-3 col-md-6">
                <label for="data_desejada" class="form-label">Data Desejada</label>
                <input type="date" id="data_desejada" class="form-control" wire:model="dataDesejada">
                @error('dataDesejada') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="row">
            <!-- Preferência de Contato -->
            <div class="mb-3 col-md-6">
                <label for="preferencia_contato" class="form-label">Como prefere ser contatado?</label>
                <select id="preferencia_contato" class="form-select" wire:model="preferenciaContato">
                    <option value="">Selecione uma opção</option>
                    <option value="email">E-mail</option>
                    <option value="whatsapp">WhatsApp</option>
                    <option value="telefone">Telefone</option>
                </select>
                @error('preferenciaContato') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>

        <!-- Observações (linha única por ser textarea) -->
        <div class="mb-3">
            <label for="observacoes" class="form-label">Observações</label>
            <textarea id="observacoes" class="form-control" wire:model="observacoes" rows="4" placeholder="Escreva suas observações..."></textarea>
            @error('observacoes') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <!-- Botão -->
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
