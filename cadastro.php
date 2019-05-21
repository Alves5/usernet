<?php
session_start();
/**
 * Avaliando se existe cadastro já feito para criar um para o usuário
 * 
 * @package ATV3
 * 
 *
 * Função que verifica se o cadastro foi efetuado para fazer um para o usuário
 *
 * @access private        
 * @return void
 */
if(!isset($_SESSION['senha'])){
         //codigo do Davi
    echo"<meta charset='utf-8' />
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' />
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0'>
    <link rel='stylesheet' type='text/css' href='Semantic-UI-CSS-master/semantic.css'>
    <link rel='stylesheet' type='text/css' href='css/css.css'>
    <script type='text/javascript' src='js/jquery.js'></script>
    <script type='text/javascript' src='js/semantic.js'></script>
    <script type='text/javascript' src='js/app.js'></script>
    <link rel='stylesheet' type='text/css' href='Semantic-UI-CSS-master/components/form.css'>
<style>
body{
background-image:url('background/backg02.jpg');
}
body > .grid {
height: 100%;
}
.image {
margin-top: -100px;
}
.column {
max-width: 450px;
}

</style>
";

echo"
<body>
<div class='ui middle aligned center aligned grid'>
    <div class='column'>
        <h2 class='ui teal image header'>
            <div class='content '>
                Cadastro
            </div>
        </h2>
        <form class='ui large form' action='processoC.php' method='post' enctype='multipart/form-data' >
            <div class='ui stacked segment'>
                <div class='field'>
                    <div class='ui left icon input'>
                        <i class='user icon'></i>
                            <input type='text' name='user' placeholder='Digite seu nome...'>
                    </div>
                </div>
                <div class='field'>
                    <div class='ui left icon input'>
                        <i class='lock icon'></i>
                            <input type='password' name='password' placeholder='Digite sua senha...'>
                    </div>
                </div>
                <div class='field'>
                    <div class='ui left icon input'>
                        <i class='lock icon'></i>
                            <input type='password' name='password2' placeholder='Confirme sua senha...'>
                    </div>
                </div>
                    <button class='ui fluid large teal submit button redbg' type='submit'>Cadastrar</button>
            </div>
            <div class='ui error message'></div>
        </form>   
        <a href='login.php'><button class='fluid ui button teal ' style='background-color:cadetblue;'>Entrar</button> </a>     
                    
    </div>
</div>
    </body>";
/*
|*Quando o cadastro já existe é redireccionada para *home.php*
|*/
 }else{
    header("location:home.php");
 }
?>