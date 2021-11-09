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
    }

    .container-cadastro-login section.cadastro{
        border-radius:10px 0 0 10px; 
        background:linear-gradient(#FFE169, #EDC531, #A47E1B);

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
        border:none;
        border-radius:20px;
        display:block;
        margin:2%;
        color:black;
    }

    input[type="email"]{
        width:70%;
    }

    input[type="password"]{
        width:40%;
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
        <h2>Cadastre-se</h2>
        <form action="" id="formulario">

            <label>
                E-mail: 
                <input type="email">
            </label>

            <label >
                Senha: 
                <input type="password">
            </label>
            <BR></BR>
            <button id="bt1"><a href={{route('compre-agora')}}> Cadastrar</a></button>

        </form>
    </section>

    <section class="login">
        <h2>Já tem um conta? Faça Login!</h2>
        <form action="" id="formulario">

            <label>
                E-mail: 
                <input type="email">
            </label>

            <label >
                Senha: 
                <input type="password">
            </label>

            <a href="">Esqueceu sua senha? Clique aqui</a>
            <BR></BR>
            <button id="bt2">
                <a href={{route('compre-agora')}} > Entrar</a>
            </button>

        </form>
    </section>

    

</main>
@endsection