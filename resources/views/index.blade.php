@extends('layout')

{{-- Section do título --}}
@section('title')
    AestheticVerse
@endsection


{{-- Section do conteúdo --}}
@section('content')
<main id="container-main">

    <section id="caixa-materia">
        <div class="materia">
            <img src="/img/water.jpg" alt="">
            <a href="">
                <h1>Importância da água para a hipertrofia muscular</h1>
            </a>
            <p>
            Cerca de 70% do músculo é formado por água. ... Isso ajuda na hipertrofia, que é o crescimento do músculo, e na síntese proteica. Um pequeno nível de desidratação já atrapalha seu desempenho no exercício na academia. Portanto, beba água antes, durante, depois da malhação e, no mínimo, 2 litros por dia. Para você gerar hidratação nas células musculares precisa levar água a elas. Isso se deve pelo fato de nossos músculos também serem compostos por 80% de..  <a href=""> continuar lendo</a>
            </p>
        </div>
    </section>

    <section id="produtos">

        <div class="contain">
            <img src="/img/blue.jpg">
        
            <div class="title-price">
                <h4 class="title-prod">
                    Whey Protein Multi Blue
                </h4>
                <span id="last-price">
                    de R$249,99
                </span>
                <br>
                <span id="best-price">
                    por R$229,99
                </span>
            </div>

            

        </div>

        <button>COMPRE AGORA</button>


        <div class="contain">
            <img src="/img/creatine.jpg">
           
            <div class="title-price">
                <h4 class="title-prod">
                    Creatina Monohidratada
                </h4>

                <span id="last-price">
                    de R$99,99
                </span>
                <br>
                <span id="best-price">
                    por R$59,99
                </span>

            </div>

            

        </div>

        <button>COMPRE AGORA</button>

        <div class="contain">
            <img src="/img/pink.jpg">
            
            <div class="title-price">
                <h4 class="title-prod">
                     Whey Protein Multi Pink
                </h4>

                <span id="last-price">
                    de R$249,99
                </span>
                <br>
                <span id="best-price">
                    por R$229,99
                </span>
           </div>

        </div>

        <button>COMPRE AGORA</button>
        

    </section>

</main>
@endsection