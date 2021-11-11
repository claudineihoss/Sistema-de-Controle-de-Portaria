<?php

include "sessao.php";
$codigo=$_POST["codigo"];
$nome= mysqli_real_escape_string($conn, $_POST['nome']);
$nome=strtoupper($nome);
$setor=$_POST["setor"];

$update="update condutor set idcondutor='$codigo',nome='$nome',setor='$setor' where idcondutor='$codigo'";
$conn->query($update);

redirect('cadastros/pesquisacondutores');


?>
