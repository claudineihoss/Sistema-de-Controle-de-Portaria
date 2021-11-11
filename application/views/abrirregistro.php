<?php

include "sessao.php";

$codigo= $_GET["codigo"];

$update= "update registro set situacao='AA',kmfinal='0',horarioentrada='' where idregistro='$codigo'";
$conn->query($update);


redirect('registros/pesquisaaberto');


?>
