<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Pacote;

class FiltroPacotes extends Component
{
    public $destino = '';
    public $dataPartida = '';
    public $precoMaximo = '';
    public $pacotes = [];

    public function mount()
    {
        $this->pacotes = Pacote::all();
    }

    public function aplicarFiltro()
    {
        $query = Pacote::query();

        if ($this->destino) {
            $query->where('destino', 'like', '%' . $this->destino . '%');
        }

        if ($this->dataPartida) {
            $query->whereDate('data_partida', $this->dataPartida);
        }

        if ($this->precoMaximo) {
            $query->where('preco', '<=', $this->precoMaximo);
        }

        $this->pacotes = $query->get();
    }

    public function limparFiltro()
    {
        $this->destino = '';
        $this->dataPartida = '';
        $this->precoMaximo = '';

        // Reload all packages
        $this->pacotes = Pacote::all();
    }

    public function render()
    {
        // Pass the filtered packages to the view
        return view('livewire.filtro-pacotes', [
            'pacotes' => $this->pacotes,
        ]);
    }
}
