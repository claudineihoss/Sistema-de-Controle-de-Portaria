<!DOCTYPE html>
<html lang="pt-br">
	<head>  
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Excluindo...</title>

		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/signin.css" rel="stylesheet">
	</head>
	<body>
      <?php
      include "sessao.php";
      include "conecta.php";
			$codigo=$_GET["codigo"];
      $placa=$_GET["placa"];
      
      $result_registro = "select * from registro where placa = '$placa' LIMIT 1";
		$resultado_registro = mysqli_query($conn, $result_registro);
		$resultado = mysqli_fetch_assoc($resultado_registro);
		
		//Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
		if(isset($resultado)){
echo "<script>window.location='../cadastros/pesquisaplaca';alert('Veiculo Possui Registro de Saida Cadastrados..Impossivel Excluir!!!');</script>";
}
else{
    

			$apagar="delete from veiculo where idveiculo='$codigo'";
  $conn->query($apagar);
  
	redirect('cadastros/pesquisaplaca');
  }

		?>
	</body>
</html>
