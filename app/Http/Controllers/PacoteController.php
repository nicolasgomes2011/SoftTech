<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pacote; // modelo se você já tiver

class PacoteController extends Controller
{
    public function index()
    {
        $pacotes = Pacote::all(); // ou paginate(10), ou top 5, etc
        return view('pacotes', compact('pacotes'));
    }
}
