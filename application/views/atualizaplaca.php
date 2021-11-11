<?php

include "sessao.php";
$codigo=$_POST["codigo"];
$descricao= mysqli_real_escape_string($conn, $_POST['descricao']);
$descricao=strtoupper($descricao);
$placa= mysqli_real_escape_string($conn, $_POST['placa']);
$placa=strtoupper($placa);
$tipo=$_POST["tipo"];
$ultimokm=$_POST["ultimokm"];
$ultimokm=str_replace('.', '', $ultimokm);
$ultimokm = str_replace(",",".", $ultimokm);
$placaantiga= mysqli_real_escape_string($conn, $_POST['placaantiga']);



$update="update veiculo set idveiculo='$codigo',descricao='$descricao',placa='$placa',tipo='$tipo',ultimokm='$ultimokm' where idveiculo='$codigo'";
$conn->query($update);

$update="update registro set placa='$placa' where placa='$placaantiga'";
$conn->query($update);

redirect('cadastros/pesquisaplaca');


?>
