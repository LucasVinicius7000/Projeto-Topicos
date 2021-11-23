<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
use Illuminate\Support\Facades\DB;

class PedidosController extends Controller
{
    public function create(){
        return view("compre-agora");
    }

    public function store(Request $request){

        Pedido::create([
            'nome'=> $request->nome,
            'email'=> $request->email,
            'cpf'=> $request->cpf,
            'celular'=> $request->celular,
            'idUser' => $request->user()->id,
            'qtWheyBlue' => $request->qtWheyBlue,
            'qtCreatine' => $request->qtCreatine,
            'qtWheyPink' => $request->qtWheyPink,
            'mensagem' => $request->mensagem,
        ]);

        return view('index');
    }

    public static function getLine(){

      $pedidos = DB::table('pedidos')->get();
     
      
      foreach($pedidos as $linha){
        echo "<tr class=\"linha\" style=\"border:1px solid black;\">";
            echo "<td>";
            echo $linha->mensagem;
            echo "</td>";

            echo "<td>";
            echo $linha->email;
            echo "</td>";

            echo "<td>";
            echo $linha->qtCreatine . " unidade(s) de creatina<br>";
            echo $linha->qtWheyBlue . " unidade(s) de Whey Blue<br>";
            echo $linha->qtWheyPink . " unidade(s) de Whey Pink<br>";
            echo "</td>";

            echo "<td>";
            echo $linha->celular;
            echo "</td>";
        echo "</tr>";

      }
      
    }
}
