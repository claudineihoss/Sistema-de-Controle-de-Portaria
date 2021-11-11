<?php

include "sessao.php";
$codigo=$_POST["codigo"];
$placa=$_POST["placa"];
$condutor=$_POST["condutor"];
$datasaida=$_POST["datasaida"];
$ultimokm=$_POST["ultimokm"];



$update= mysql_query("update veiculo set idveiculo='$codigo',descricao='$descricao',placa='$placa',tipo='$tipo',ultimokm='$ultimokm' where idveiculo='$codigo'") or die ("ERRO");


redirect('cadastros/pesquisaplaca');


?>
