<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    public function up()
    {
        Schema::create('pacotes_viagem', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('destino');
            $table->text('descricao');
            $table->decimal('preco', 10, 2);
            $table->date('data_partida');
            $table->date('data_saida');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pacotes_viagem');
    }
};
