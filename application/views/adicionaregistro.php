<?php

include 'sessao.php';


$placa= $_POST["placa"];
$data = $_POST["data"];
$condutor = $_POST["condutor"]; 
$local= mysqli_real_escape_string($conn, $_POST['local']);
$local = strtoupper($local);
$obs= mysqli_real_escape_string($conn, $_POST['obs']);
$obs = strtoupper($obs);

$sql_km = $conn->query("SELECT ultimokm FROM veiculo WHERE placa='$placa'");
			$busca_query = $sql_km->fetch_array(); 
			$ultimokm = $busca_query['ultimokm'];
      
      $result_registro = "select * from registro where placa = '$placa' and situacao='AA'";
		$resultado_registro = mysqli_query($conn, $result_registro);
		$resultado = mysqli_fetch_assoc($resultado_registro);

	if(isset($resultado)){
echo "<script>window.location='../registros/saida';alert('Placa com Registro em Aberto!!!');</script>";
}
else{

$sql = "insert into registro(placa,condutor,horariosaida,local,kmanterior,situacao,obs) 
values('$placa','$condutor','$data','$local','$ultimokm','AA','$obs')";
$conn->query($sql);

echo "<script>window.location='../registros/saida';alert('Registro Efetuado com Sucesso!!');</script>";

}
 
?>
