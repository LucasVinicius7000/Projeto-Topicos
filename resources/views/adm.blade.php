<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Administrativo AestheticVerse</title>
    <style>

        *{
            margin:0;
            padding: 0;
            box-sizing: border-box;
        }

        html{
            height: 100%;
        }

        main,body,form{
            height: inherit; 
        }

        form{
            display: grid;
            grid-template-columns: 1fr;
            grid-template-rows: 1fr 1fr 1fr;
            
        }
        table{
            margin:0 auto;
            grid-row:2/3;
            align-self: flex-start;
            border: 3px solid black;
        }

        

        td input:not([type="submit"]){
            width: 100%;
            padding: 5px 10px;
            border: 1px solid black;
            color:black;
        }

        td input[type="submit"]{
            padding:2px;
            margin:10px;
            background: #FFFFFF;
            
        }


    </style>
</head>
<body>
    
    <main>
        <form action="{{route('painel')}}" method="post">
            @csrf
            <table>
                <tr>
                    <th>LOGIN ADMINISTRATIVO - AestheticVerse</th>
                </tr>
        
                <tr>
                    <td>
                        <input type="text" name="username" placeholder="Login*">
                    </td>
                </tr>
        
                <tr>
                    <td>
                        <input type="password" name="pass" placeholder="Senha*">
                    </td>
                </tr>
        
                <tr>
                    <td>
                    <input type="submit" name="bt-login-adm" value="ENTRAR">
                    </td>
                </tr>
        
            </table>
        </form>
    </main>
    
</body>
</html>

