<?php

include "conecta.php";

@session_start();

$usuario=$_SESSION['usuario'];

if($usuario==''){
redirect('primeiro/index');
}

?>

      
			
     
			
     
