<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Adm;
use App\Http\Controllers\Controller;
use Hamcrest\Core\HasToString;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\DB;

class AdmsController extends Controller
{   
    protected $guard = 'adm';
    protected $table = 'adms';

    public function create(){
        return view("painel-adm");
    }

    /* Se necessário cadastrar novo usuário para painel administrativo */
    public function store(Request $request){
        
        Adm::create([
            'username' => $request->username,
            'password' => bcrypt($request->password), 
        ]);

        return view('adm');
    }
    

    public function login(Request $request){

        $credentials = [  
            'username' => $request->username,
            'password' => $request->password,
        ];

        
        
        if((Auth::guard('admin_users')->attempt($credentials))){
        
            return view('painel-adm'); 
        }
        else 'Usuário e/ou senha incorretos';
        
    }
}
