<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacoteController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/pacotes', [PacoteController::class, 'index'])->name('pacotes.index');

Route::get('/servicos', function () {
    return view('servicos');
})->name('servicos.index');

Route::get('/empresa', function () {
    return view('empresa');
})->name('empresa.index');
