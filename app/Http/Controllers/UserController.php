<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class UserController extends Controller{

    public function create(){
        return view('cadastro');
    }

    public function store(Request $request){
        
        User::create([
            'email' => $request->email,
            'password' => bcrypt($request->password), 
        ]);

        return view('cadastro');
    }

    public function login(Request $request){
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if(Auth::attempt($credentials)){
           return view('compre-agora');
        }
        else echo "Email ou senha incorretos";
    }


}
