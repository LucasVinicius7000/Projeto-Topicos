<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClientesController extends Controller
{
    public function create(){
        return view('compre-agora');
    }

    public function store(Request $request){
        
        Cliente::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'cpf' => $request->cpf,
            'celular' => $request->celular,
        ]);
    }
}
