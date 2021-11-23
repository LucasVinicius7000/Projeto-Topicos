@extends('layout')

@section('title')
    AestheticVerse | Entre ou cadastre-se
@endsection

{{-- Section dos estilos específicos da página cadastro --}}
@section('style')
<style>

    *{
        margin:0;
        padding:0;
        
    }


    body{
        background: url("/img/muscle_man.jpg");
        background-repeat:repeat-x;
        
    }

    #logotitulo img{
        display: none;
    }

    #logotitulo{
        position:absolute;
        left:35%;
        top:10%;
        text-align:center;
        background-position:center center;
        font-weight: bold;
    }
    

    #logotitulo h2{
        background-image: linear-gradient(#FFE169, #EDC531, #A47E1B);
        -webkit-background-clip: text;
        color: transparent;
    }

    .container-cadastro-login{
        width:80%;
        margin:0 auto;
    }

    .container-cadastro-login section{
        
        width:50%;
        height:350px;
        position: relative;
        top:100px;
        float:left;
    }

    .container-cadastro-login *{
        color:whitesmoke;
    }

    .container-cadastro-login h2{
        text-align:center;
        position: relative;
        top:25px;
        
    }

    .container-cadastro-login section.cadastro{
        border-radius:10px 0 0 10px; 
        background:linear-gradient(#d1a023,#ffe169b2,#edc4318f);
        
    }

    .container-cadastro-login section.login{
        border-radius:0 10px 10px 0;
        background:linear-gradient(black,rgba(58, 54, 54, 0.438));
    }
 

    label{
        margin-left:2%;
    }
    
    input[type="email"],input[type="password"]{
        height:35px;
        padding-left:15px;
        border:none;
        border-radius:25px;
        display:block;
        margin:2%;
        width:70%;
        color:black;
    }

   
    .adm{
        position: absolute;
        bottom:1px;
        left:2px;
    }
    
    .adm button{
        color:white;
        background:linear-gradient(#FFE169, #EDC531, #A47E1B);;
        padding:0 5px 0 5px;
        border-radius:50px;
        font-size:0.8em;
    }
   

    #bt2{
        border:none;
        font-size:1em;
        font-weight:bolder;
        color:white;
        width:20%;
        height:45px;
        position:relative;
        left:35%;
        background:linear-gradient(#FFE169, #EDC531, #A47E1B);
    }

    #bt1{
        border:none;
        font-size:1em;
        font-weight:bolder;
        background-color: #2A2828; 
        width:20%;
        height:45px;
        position:relative;
        left:35%;
        
    }
    


</style>

@endsection


{{-- Section do conteúdo --}}
@section('content')
    
<div class=clearfix></div>

<main class=container-cadastro-login>

    <section class="cadastro">
        <h2>> Cadastre-se</h2>
        <form action="{{route('cadastrar')}}" id="formulario" method="POST">
            @csrf
            <label>
                E-mail: 
                <input type="email"  name="email" placeholder="Cadastre seu email*">
            </label>

            <label >
                Senha: 
                <input type="password" name="password" placeholder="Defina sua senha de acesso*">
            </label>
            <BR></BR>
            
            <input id="bt1" type="submit" value="Cadastrar">

        </form>
    </section>

    <section class="login">
        <h2>> Já tem um conta? Faça Login!</h2>
        <form method="get" id="formulario" action="{{ route('logar') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class=""
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>
            <BR></BR>
            <input id="bt2" type="submit" value="Entrar">

            </div>
        </form>
    </section>

</main>

    <div class="adm">
        <button>
            <a href="{{route('adm')}}">Administrativo</a>
        </button>
    </div>

@endsection