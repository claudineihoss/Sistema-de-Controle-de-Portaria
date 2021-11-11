<?php

include "conecta.php";
$codigo=$_POST["codigo"];
$nome= mysqli_real_escape_string($conn, $_POST['nome']);
$nome = strtoupper($nome);
$login= mysqli_real_escape_string($conn, $_POST['login']);
$login = strtoupper($login);

$senha= mysqli_real_escape_string($conn, $_POST['senha']);
$senha = base64_encode($senha);



$update="update usuario set id='$codigo',nome='$nome',login='$login',senha='$senha' where id='$codigo'";

$conn->query($update);

redirect('cadastros/pesquisausu');


?>
