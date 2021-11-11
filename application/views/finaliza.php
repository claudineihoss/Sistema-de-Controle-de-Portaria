<?php

include "conecta.php";

$codigo= $_POST["codigo"];
$dataretorno=$_POST["dataretorno"];

$ultimokm =$_POST["ultimokm"];
$ultimokm=str_replace('.', '', $ultimokm);
$ultimokm = str_replace(",",".", $ultimokm);

$kmretorno =$_POST["kmretorno"];
$kmretorno=str_replace('.', '', $kmretorno);
$kmretorno = str_replace(",",".", $kmretorno);

$obs= mysqli_real_escape_string($conn, $_POST['obs']);
$obs=strtoupper($obs);

$sql_query = $conn->query("SELECT placa FROM registro WHERE idregistro='$codigo'");
			$busca_query = $sql_query->fetch_array();

			$placa = $busca_query['placa'];


$update="update veiculo set 	ultimokm='$kmretorno' where placa='$placa'";
$conn->query($update);


$update1= "update registro set 	idregistro='$codigo',	horarioentrada='$dataretorno',KMfinal='$kmretorno',kmanterior='$ultimokm',obs='$obs',situacao='FF' where idregistro='$codigo'";
$conn->query($update1);


echo "<script>window.location='../registros/pesquisaaberto';alert('Finalizado com Sucesso!!');</script>";


 
?>
