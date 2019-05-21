<?php
/**
 * Variaveis criadas para receber dados
 * 
 * @package ATV3
 * @access private 
 */
$legenda=(isset($_POST['nome']))? $_POST['nome']:NULL;
$imagem=(isset($_FILES['foto']))? $_FILES['foto']:NULL;
session_start();
$pasta=$_SESSION["nome"];
/**
 * @param string $nome nome do usuario a ser criado 
 * @param string $img nome da imagem a ser criada
 */
function processo($nome,$img){
//Verificação se é imagem ou não...
if($img['type']=="image/jpg" || $img['type']=="image/jpeg" || $img['type']=="image/png" ){
    //Verificando extensão da foto...
    if($img['type']=="image/jpg"){
        $ext= "jpg";
    }else if($img['type']=="image/jpeg"){
        $ext= "jpeg";
    
    }else if($img['type']=="image/png"){
        $ext= "png";
    }else{
        $ext= false;
    }
}else{
    header("Location:home.php");
}
//criando pasta
if(!file_exists("contas/$pasta/img")){
    mkdir("contas/$pasta/img", 0777);
}

//Adicionar várias imagens...
if($ext){
    $ext=substr($img['type'],6);
    if(file_exists("contas/$pasta/img/{$nome}.{$ext}")){
        $n=++$_SESSION[$nome];
        rename("contas/$pasta/img/{$nome}.{$ext}","contas/$pasta/img/{$nome}.{$ext}");
        move_uploaded_file($img['tmp_name'],"contas/$pasta/img/{$nome}.{$ext}");
        setcookie('imgcriada',true,time()+3);
        header('location:home.php');
        

    }else{
        move_uploaded_file($img['tmp_name'],"contas/$pasta/img/{$nome}.{$ext}");
        $_SESSION[$nome] = 1;
        setcookie('imgcriada',true,time()+3);
        header('location:home.php');
       
    }
    /**
     * @param string $img conteudo da imagem
     * @return void
     */
    unset($img);
    }
}
processo($legenda,$imagem);
?>