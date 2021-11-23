@extends('layout')


@section('title')
    AestheticVerse | Compre Agora
@endsection

{{-- Section do conteúdo --}}
@section('content')

<div class=clearfix></div>

<main class="container-main-compre-agora">

    <h2>Faça agora mesmo sua encomenda!</h2>
    <span id="ast">*campos obrigatórios</span>

    <section>

        <form class="form-encomenda" id="form" action="{{route('pedido')}}" method="post">
            @csrf
           <label id="campo-nome" for="">
                <input type="text" name="nome" placeholder="Nome*">   
           </label>

           <label id="campo-email" for="">
                <input type="email" name="email" placeholder="E-mail*" >
           </label>

           <label id="campo-cpf" for="">
                <input type="number" name="cpf" placeholder="CPF*">
           </label>

           <label id="campo-telefone" for="">
                <input type="tel" name="celular" placeholder="Celular*">
           </label>

           <label id="campo-produtos" for="">

               <h3>Produtos escolhidos</h3>

                <div id="product">
                   
                    <label for="" class="item">
                        Whey Protein Multi Blue  
                    </label>
                    <span>
                      <input name="qtWheyBlue" type="number" value="0" min="0" max="100">
                    </span>

                    <label for="" class="item" >
                        Creatina Monohidratada 
                    </label>
                    <span>
                        <input name="qtCreatine" type="number" value="0" min="0" max="100">
                    </span>
                    
                    <label for="" class="item">
                        Whey Protein Multi Pink   
                    </label>
                    <span>
                        <input name="qtWheyPink" type="number" value="0" min="0" max="100">
                    </span>

                </div>

                <div id="text">
                    <h3>Mensagem (opcional)</h3>
                    <textarea name="mensagem" form="form"></textarea>

                </div>

               <input type="submit" value="Fazer Pedido">

               <span>Ao clicar em "Fazer Pedido" basta aguardar que entraremos em contato o mais rápido possível para melhor atendê-lo!</span>
               
               
           </label>




        </form>

    </section>

</main>
@endsection

    
