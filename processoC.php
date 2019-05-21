<?php
/**
 * Verificar se o usuário está cadastrado e fazer o login
 * 
 * @access private
 * @package ATV3
 */
$cUser=$_POST['user'];
$cSenha=$_POST['password'];
$cSenha2=$_POST['password2'];
    /**
 * Função para verificar se existe o usuário
 * 
 * @param string $usuario variavel que irá armazenar o usuario
 * @param $pwd variavel que irá armazenar uma senha
 * @param $pwd2 variavel que irá armazenar outra senha
 * @return boolean
 * @access private
 */

    function validar($usuario, $pwd, $pwd2){
        $formValid = true;
        if($pwd == $pwd2){
            $formValid = true;
        }else{
            $formValid = false;
        }

        $tamanhoU = strlen($usuario);
        if($tamanhoU < 5 || $tamanhoU > 40){
            $formValid = false;
        }
        $tamanhoS = strlen($pwd);
        if($tamanhoS < 5 || $tamanhoS > 30){
            $formValid = false;
        }
        $tamanhoS2 = strlen($pwd2);
        if($tamanhoS2 < 5 || $tamanhoS2 > 30){
            $formValid = false;
        }
        if($formValid == true){
            mkdir("contas/$usuario",0777);
            setcookie("user", $usuario, time()+5000);
            
            $arquivo2=fopen("contas/$usuario/$usuario.txt","w");
            fwrite($arquivo2,"linha1\r\nlinha2\r\n$pwd");
            fclose($arquivo2);
            $formValid = true;
        }
        return $formValid;
    }
    validar($cUser, $cSenha, $cSenha2);
        header("Location: index.php");
    
?>
