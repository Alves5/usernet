<?php
/**
 * Função para verificar o login ou o cadastro
 * 
 * @package ATV3
 * @access private
 * @return void
 */
session_start();
function comecando(){
if(!isset($_SESSION['senha'])){
        header("location:login.php");
    }else{
    echo "
        <meta charset='utf-8' />
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
            background-image:url('background/backg.jpg');
        }
        body > .grid {
            height: 100%;
        }
        #menu{
            background: #fff;
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
        <div id='menu' class='ui secondary pointing menu'>
                    <a class='item'>Membros</a>
                    <a class='item' href='mudarsenha.php'>Trocar senha</a>
                    <div class='right menu'>
                        <a class='ui item active' href='logout.php'>Logout</a>
                    </div>
                </div>";
    }}
    comecando();
    /**
     * função para verificar se a galeria foi limpa
     * Verificar se a imagem foi adicionada em *processa.php*
     * @access private
     * @return void
     */
    function galeria(){
        if (isset($_COOKIE['limpado'])) {
            echo " <div class='ui floating message'>
            <center> <p>Galeria Limpa</p> </center>
             </div>";
         }

         if (isset($_COOKIE['imgcriada'])) {
            echo " <div class='ui floating message'>
            <center> <p>Imagem adicionada com sucesso</p>
             </div>";
         }

            echo "<div class='ui middle aligned center aligned grid'>
                <div class='column'>
                    <form class='ui large form' action='processa.php' method='post' enctype='multipart/form-data' >
                    <div class='ui stacked segment'>
                        <div class='field'>
                        <div class='ui left icon input'>
                        <i class='photo icon'></i>
                            <input type='file' name='foto' required>
                        </div>
                        </div>
                        <div class='field'>
                        <div class='ui left icon input'>
                        
                            <textarea type='text' name='nome' placeholder='Digite algo sobre a imagem...' required></textarea>
                        </div>
                        </div>
                        
                        <button class='ui fluid large teal submit button redbg' type='submit'>Enviar</button>
                    </div>
                    </form>
                    <a href='slide.php'><button class='fluid ui button teal ' style='background-color:cadetblue;' > ir para a galeria de fotos </button> </a>
                
        </body>
    ";
    }

galeria();
?>