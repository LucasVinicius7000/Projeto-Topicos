<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Painel de Administração | AestheticVerse</title>
    <style>

        *{
            padding:0;
            margin:0;
            box-sizing: border-box;
        }

        .tabela{
            width:100%;
        }

        #first th{
            background-color:black;
            color:whitesmoke;
            padding: 25px;
        }

        .linha td{
            border:1px solid black;
            text-align: center;
            padding:2px;
        }

    </style>
</head>
<body>
    <div>
        <table class="tabela">
            <tr id="first">
                <th>MENSAGEM</th>
                <th>EMAIL SOLICITANTE</th>
                <th>PEDIDOS</th>
                <th>CONTATO TELEFÔNICO</th>
            </tr>

         {{ $linhas = app('App\Http\Controllers\PedidosController')->getLine() }}

        </table>
       
        <br>
    </div>
</body>
</html>