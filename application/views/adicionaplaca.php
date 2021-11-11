<?php

include 'conecta.php'; 
$descricao= mysqli_real_escape_string($conn, $_POST['descricao']);
$descricao = strtoupper($descricao);

$placa= mysqli_real_escape_string($conn, $_POST['placa']);
$placa = strtoupper($placa);

$tipo = $_POST["tipo"];

$km=$_POST["km"];
$km=str_replace('.', '', $km);
$km = str_replace(",",".", $km);

$result_placa = "select * from veiculo  where placa ='$placa' LIMIT 1";
		$resultado_placa = mysqli_query($conn, $result_placa);
		$resultado = mysqli_fetch_assoc($resultado_placa);

if(isset($resultado)){
echo "<script>window.location='../cadastros/cadplaca';alert('Placa Ja Cadastrado!!!');</script>";
}
else{

$sql = "insert into veiculo(descricao,placa,tipo,ultimokm) 
values('$descricao','$placa','$tipo','$km')";
$conn->query($sql);

echo "<script>window.location='../cadastros/cadplaca';alert('Cadatro Efetuado com Sucesso!!');</script>";
}
 
?>
