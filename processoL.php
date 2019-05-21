<?php
/**
 * Efetuando o processo de login
 * 
 * @package ATV3
 * @access private
 * @var string $usuario recebe a variavel @global $_POST['usuario']
 * @var string $senha recebe a variavel @global $_POST['password']
 */
 
    $usuario=$_POST['usuario'];
    $senha=$_POST['password'];
/**
 * @access public
 * @param string $user usuario criado
 * @param string $pwd senha criada
 * @return string 
 */
    function logIn($user, $pwd){
        $formValid = true;
        if($_COOKIE["user"] == $user){
            $formValid = true;
        }else{
            $formValid = false;
        }
        $arquivo = file("contas/$user/$user.txt");
            if($arquivo[2]==$pwd){
                $formValid = true;
            }else{
               $formValid = false;
            }
        if($formValid == true){
            session_start();
            $_SESSION['senha'] = $pwd;
            $_SESSION["nome"] = $user;
            $pasta=$_SESSION["nome"];
            if(!file_exists("contas/$pasta/img")){
                mkdir("contas/$pasta/img", 777);
            }
        }
        return $formValid;
    }
    logIn($usuario, $senha);
        header("Location: home.php");
       
    
?>