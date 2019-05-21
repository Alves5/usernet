<?php
/**
 * Limpar a galeria apagando as imagens da pasta $dir
 * 
 * @package ATV3
 * @access private
 * @return void
 * @param string $dir variavel que contem o caminho do diretorio a ser apagado
 */
function deletar($dir) { 
    $files = array_diff(scandir($dir), array('.','..')); 
    foreach ($files as $file) { 
      (is_dir("$dir/$file")) ? deletar("$dir/$file") : unlink("$dir/$file"); 
    } 
     
  }
  /**
   * @var string $pastaa 
   * @var string $diretorio
   */
  $pastaa=$_SESSION['nome'];
  $diretorio="contas/$pastaa/";
  deletar($diretorio);
  if(!file_exists("contas/$pastaa/img")){
    mkdir("contas/$pastaa/img", 0777);
}
  setcookie('limpado',true,time()+4);
  header('location:home.php');





?>