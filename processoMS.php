<?php
/**
 * Pocesso para realizar a mudança de senha do usuario
 * 
 * @package ATV3 
 * @access private
 * @var $senha1 recebe a variavel global @global string $_POST['password']
 * @var $novaSenha recebe a variavel global @global string $_POST['password2']
 * @var $user recebe a variavel global @global string $_POST['user']
 */
$senha1=$_POST['password'];
$novaSenha=$_POST['password2'];
$user=$_POST['user'];
/**
 * @param string $pwd primeira senha digitada pelo usuario
 * @param string $cpwd outra senha digitada
 * @param string $pessoa usuario que foi criado
 * @return string
 */
function mudarSenha($pwd,$cpwd,$pessoa){
    $formValid = true;
    if(file_exists("contas/$pessoa")){
        $var = file("contas/$pessoa/$pessoa.txt");
        if($pwd==$var[2]){
            $var[0]=$var[1];
            $var[1]=$var[2];
            $var[2]=$cpwd;
            $arquivo=fopen("contas/$pessoa/$pessoa.txt","w");
            fwrite($arquivo,"$var[0]$var[1]\r\n$var[2]");
            fclose($arquivo);
           $formValid = true;
        }else{
            $formValid = false;
        }
        $formValid = true;
    }else{
        $formValid = false;
    }
    return $formValid;
}
 if(mudarSenha($senha1,$novaSenha,$user)){
     header("Location: home.php");
 }else{
     echo "Houve um erro ao mudar a senha";
 }
?>