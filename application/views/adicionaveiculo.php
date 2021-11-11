<?php

include 'conecta.php';



$descricao = strtoupper($_POST["descricao"]);
$descricao=preg_replace( '/[`^~\'"]/', null, iconv( 'UTF-8', 'ASCII//TRANSLIT', $descricao ) );
$descricao = strtoupper($descricao);

$placa = strtoupper($_POST["placa"]);
$placa=preg_replace( '/[`^~\'"]/', null, iconv( 'UTF-8', 'ASCII//TRANSLIT', $placa ) );
$placa = strtoupper($placa);



$sql = "insert into veiculo(descricao,placa) 
values('$descricao','$placa')";
mysql_query($sql);

echo "<script>window.location='../cadastro/cadveiculo';alert('Cadatro Efetuado com Sucesso!!');</script>";

 
?>
