<?php
/**
 * Mudando a senha do usuario
 * 
 * @package ATV3
 * @access private 
 * @return void
 */
function mudar(){
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
            <h2 class='ui teal image header '>
                <div class='content'>
                    Mudar senha
                </div>
            </h2>
            <form class='ui large form' action='processoMS.php' method='post' enctype='multipart/form-data' >
                <div class='ui stacked segment'>
                    <div class='field'>
                    </div>
                    <div class='field'>
                        <div class='ui left icon input'>
                            <i class='lock icon'></i>
                                <input type='text' name='user' placeholder='Digite seu usuario...'>
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
                                <input type='password' name='password2' placeholder='Digite sua nova senha...'>
                        </div>
                    </div>
                        <button class='ui fluid large teal submit button redbg' type='submit'>Confirmar</button>
                </div>
                <div class='ui error message'></div>
            </form>
        </div>
    </div>       
            
        </body>
    ";
}
mudar();
?>
