<?php
namespace App\View\Components;

use Illuminate\View\Component;

class CardPacote extends Component
{
    public $pacote;

    /**
     * Cria uma nova instância do componente.
     *
     * @param $pacote
     */
    public function __construct($pacote)
    {
        $this->pacote = $pacote;
    }

    /**
     * Renderiza a view do componente.
     */
    public function render()
    {
        return view('components.card-pacote');
    }
}