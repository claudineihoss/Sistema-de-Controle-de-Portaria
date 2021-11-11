<body>

     <div class="modal fade bs-example-modal-lg" id="myModal" role="dialog" aria-labelledby="myLargeModalLabel" data-backdrop="static">
         <div class="modal-dialog modal-lg" role="document">
           <div class="modal-content">
           </div>
       </div>
   </div>

<?php
include "conecta.php";

if(isset($_SESSION)){
session_destroy();
} 

$login= mysqli_real_escape_string($conn, $_POST['login']);
$login = strtoupper($login); 
$senha= mysqli_real_escape_string($conn, $_POST['senha']);
$senha = base64_encode($senha);


//Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
		$result_usuario = "SELECT * FROM usuario WHERE login = '$login' && senha = '$senha' LIMIT 1";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		$resultado = mysqli_fetch_assoc($resultado_usuario);
		
		//Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
		if(isset($resultado)){
    session_start();	
 	$_SESSION['usuario']= $login;               
  redirect('primeiro/paginaprincipal');
  }

	else{
echo "<script>window.location='../primeiro/index';alert('Usuario ou Senha Invalidos..');</script>";

    }
 			

?>
