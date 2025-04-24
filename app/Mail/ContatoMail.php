<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContatoMail extends Mailable
{
    use Queueable, SerializesModels;

    public $nome, $email, $telefone, $assunto, $interesse, $dataDesejada, $preferenciaContato, $observacoes;

    // Recebe as variáveis do formulário
    public function __construct($nome, $email, $telefone, $assunto, $interesse, $dataDesejada, $preferenciaContato, $observacoes)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;
        $this->assunto = $assunto;
        $this->interesse = $interesse;
        $this->dataDesejada = $dataDesejada;
        $this->preferenciaContato = $preferenciaContato;
        $this->observacoes = $observacoes;
    }

    public function build()
    {
        return $this->subject('Mensagem de Contato')
                    ->view('emails.contato') // Vai buscar a view 'emails.contato' (você cria essa view)
                    ->with([
                        'nome' => $this->nome,
                        'email' => $this->email,
                        'telefone' => $this->telefone,
                        'assunto' => $this->assunto,
                        'interesse' => $this->interesse,
                        'dataDesejada' => $this->dataDesejada,
                        'preferenciaContato' => $this->preferenciaContato,
                        'observacoes' => $this->observacoes,
                    ]);
    }
}
