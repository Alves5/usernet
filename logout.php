<?php
/**
 * destroindo a sessão de criada no momento de login do usuario e redirecionando para *login.php*
 * 
 * @package ATV3
 * @access public
 * @return void 
 */
session_start();
session_destroy();
header("location:login.php");
?>