<?php

namespace App\Livewire;

use Livewire\Component;
use App\Mail\ContatoMail;
use Illuminate\Support\Facades\Mail;

class Contato extends Component
{
    public $nome, $email, $telefone, $assunto, $interesse, $dataDesejada, $preferenciaContato, $observacoes;

    protected $rules = [
        'nome' => 'required|min:3',
        'email' => 'required|email',
        'telefone' => 'required|min:10',
        'assunto' => 'required',
        'interesse' => 'required|min:3',
        'dataDesejada' => 'nullable|date',
        'preferenciaContato' => 'required',
        'observacoes' => 'nullable|max:1000',
    ];

    public function submit()
    {
        // Valida os campos
        $this->validate();

        // Envia o e-mail usando a classe ContatoMail
        Mail::to('destinatario@example.com')->send(new ContatoMail($this->nome, $this->email, $this->telefone, $this->assunto, $this->interesse, $this->dataDesejada, $this->preferenciaContato, $this->observacoes));

        // Exibe uma mensagem de sucesso na sessão
        session()->flash('success', 'Mensagem enviada com sucesso!');

        // Limpa os campos do formulário
        $this->reset(); 
    }

    protected $validationAttributes = [
        'dataDesejada' => 'data desejada',
        'preferenciaContato' => 'preferência de contato',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.contato');
    }
}
