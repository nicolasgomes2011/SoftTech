<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pacote extends Model
{
    protected $table = 'pacotes_viagem'; // Nome da tabela no banco de dados

    protected $fillable = [
        'nome',
        'destino',
        'descricao',
        'preco',
        'data_partida',
        'data_saida',
    ];

    protected $casts = [
        'preco' => 'decimal:2',
        'data_partida' => 'date',
        'data_saida' => 'date',
    ];
}