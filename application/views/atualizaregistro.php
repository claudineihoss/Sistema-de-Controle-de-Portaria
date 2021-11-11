<?php

include "sessao.php";

$codigo= $_POST["codigo"];
$placa= $_POST["placa"];
$data = $_POST["datasaida"];

$sql_km = $conn->query("SELECT ultimokm FROM veiculo WHERE placa='$placa'");
			$busca_query = $sql_km->fetch_array(); 
			$ultimokm = $busca_query['ultimokm'];

$condutor = $_POST["condutor"];

$local= mysqli_real_escape_string($conn, $_POST['local']);
$local=strtoupper($local);

$obs= mysqli_real_escape_string($conn, $_POST['obs']);
$obs=strtoupper($obs);


$update="update registro set idregistro='$codigo',condutor='$condutor',horariosaida='$data',local='$local',kmanterior='$ultimokm',obs='$obs' where idregistro='$codigo'";
$conn->query($update);

redirect('registros/pesquisaaberto');


?>
