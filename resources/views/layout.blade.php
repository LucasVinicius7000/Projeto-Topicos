<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <link rel="stylesheet" type="text/css" href="index.css">
        <link rel="stylesheet" href="compre-agora.css">
        <!-- yield style usada apenas em cadastro -->
        @yield('style')

    </head>

    <body>
        
        <header >
            <nav>
                <div id="logotitulo">
                    <a href="">
                        <img id="msc" src="/img/muscle_man.jpg" alt="muscle">
                        <h2 class="title">Aesthetic</h2>
                        <h2 class="title">Verse</h2>
                    </a>
                        
                </div>
                        
                
                <ul id="options">
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li><a href={{route('quem_somos')}}>Quem Somos</a></li>
                    <li><a href={{route('cadastro')}}>Compre Agora</a></li>

                </ul>   
            </nav>
        </header>
        <!-- yield content usada em todas páginas -->
        @yield('content')

    </body>


</html>


</html>