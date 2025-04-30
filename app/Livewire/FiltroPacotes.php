<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Pacote;

class FiltroPacotes extends Component
{
    // Public properties to store filter inputs and filtered packages
    public $destino = ''; // Destination filter
    public $dataPartida = ''; // Departure date filter
    public $precoMaximo = ''; // Maximum price filter
    public $pacotes = []; // Array to store the filtered packages

    // The mount method is executed when the component is initialized
    public function mount()
    {
        // Load all packages initially
        $this->pacotes = Pacote::all();
    }

    // Method to apply filters based on user input
    public function aplicarFiltro()
    {
        // Start a query on the Pacote model
        $query = Pacote::query();

        // Apply destination filter if provided
        if ($this->destino) {
            $query->where('destino', 'like', '%' . $this->destino . '%');
        }

        // Apply departure date filter if provided
        if ($this->dataPartida) {
            $query->whereDate('data_partida', $this->dataPartida);
        }

        // Apply maximum price filter if provided
        if ($this->precoMaximo) {
            $query->where('preco', '<=', $this->precoMaximo);
        }

        // Update the $pacotes property with the filtered results
        $this->pacotes = $query->get();
    }

    public function limparFiltro()
    {
        // Reset all filter properties to their default values
        $this->destino = '';
        $this->dataPartida = '';
        $this->precoMaximo = '';

        // Reload all packages
        $this->pacotes = Pacote::all();
    }

    // The render method is responsible for rendering the component's view
    public function render()
    {
        // Pass the filtered packages to the view
        return view('livewire.filtro-pacotes', [
            'pacotes' => $this->pacotes,
        ]);
    }
}
