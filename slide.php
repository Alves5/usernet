<?php
session_start();
/**
 * @package ATV3
 * @access private 
 * @var string $img recebe a variavel global @global string $_SESSION["nome"]
 * Criando a pasta com as imagens  
 * @global string {$_SESSION["nome"]}
 * @return void
 */
function criando(){    
    $img =opendir("contas/{$_COOKIE["nome"]}/img");
    echo"
    <meta charset='utf-8' />
        <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' />
        <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0'>
        <link rel='stylesheet' type='text/css' href='Semantic-UI-CSS-master/semantic.css'>
        <link rel='stylesheet' type='text/css' href='css/css.css'>
        <script type='text/javascript' src='js/jquery.js'></script>
        <script type='text/javascript' src='js/semantic.js'></script>
        <link rel='stylesheet' type='text/css' href='Semantic-UI-CSS-master/components/form.css'>
        <link rel='stylesheet' type='text/css' href='slick/slick.css'>
  	    <link rel='stylesheet' type='text/css' href='slick/slick-theme.css'>
        <script type='text/javascript' src='slick/slick.min.js'></script>
        <style>
            p{
                color: white;
            }
            .autoplay{
                text-align: center;
                width: 100%;
            }
            .autoplay img{
                margin: 0%;
                width: 100%;
                height: 300px;
            }
            body{
                background-image:url('background/backg.jpg');
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
 
        <div class='ui middle aligned center aligned grid'>
        <div><br><br><br><div>
            <div class='column'>
            <a class='ui inverted button' href=\"home.php\">Add +</a>
                <a class='ui inverted button' href=\"limpar.php\">limpar galeria</a>
                <br><br>
                <div >
                <ul class='autoplay anim ' >
                
    ";
            
                        while(false !=($ler = readdir($img))){
                            if($ler == "." || $ler == ".."){
                                continue;
                            }else{
                                $veri=substr($ler,-4);
                                if($veri!="jpeg"){
                                $leg= substr($ler, 0, -4);
                                
                                echo"
                                <li>
                                        <img src=\"contas/{$_COOKIE["nome"]}/img/$ler\">
                                        <span style='color:white;'>$leg</span></img>
                                       
                                <li>
                                ";
                                }else{
                                    $leg= substr($ler, 0, -5);
                                
                                    echo"
                                    <li>
                                            <img src=\"contas/{$_COOKIE["nome"]}/img/$ler\">
                                            <span style='color:white;'>$leg</span></img>
                                           
                                    <li>
                                    ";  
                                }
                            }
                        }
                        
                        
    echo "
    <ul>
    
                </div>
                
            </div>
        </div>
        <script>
            $('document').ready(function(){
                $('.autoplay').slick({
                    infinite: true,
                    slidesToShow: 1,
                    slidesToScroll: 2,
                    arrows: true,
                    autoplay: true,
                    autoplaySpeed: 3000,
                    
                    

                    
                })
                
            })
        </script>

    ";
        }
        criando();
?>