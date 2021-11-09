<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produtos;

class ProdutosController extends Controller
{
    public function create(){
        return view('compre-agora');
    }

    public function store(Request $request){
        
        Produtos::create([
            'qtWheyBlue' => $request->qtWheyBlue,
            'qtCreatine' => $request->qtCreatine,
            'qtWheyPink' => $request->qtWheyPink,
        ]);
    }
    //
}
