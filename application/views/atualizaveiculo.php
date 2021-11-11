<?php

include 'conecta.php';

$codigo= $_POST["codigo"];
$descricao = strtoupper($_POST["descricao"]);
$descricao=preg_replace( '/[`^~\'"]/', null, iconv( 'UTF-8', 'ASCII//TRANSLIT', $descricao ) );
$descricao = strtoupper($descricao);

$placa = strtoupper($_POST["placa"]);
$placa=preg_replace( '/[`^~\'"]/', null, iconv( 'UTF-8', 'ASCII//TRANSLIT', $placa ) );
$placa = strtoupper($placa);




$update= mysql_query("update veiculo set 	idveiculo='$codigo',descricao='$descricao',placa='$placa' where idveiculo='$codigo'") or die ("ERRO");


echo "<script>window.location='../pesquisa/pesquisaveiculo';alert('Atualizado com Sucesso!!');</script>";


 
?>
