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
    

			$apagar="delete from usuario where id='$codigo'";
  $conn->query($apagar);
  
	redirect('cadastros/pesquisausu');

		?>
	</body>
</html>
