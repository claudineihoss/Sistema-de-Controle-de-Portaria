<?php

include 'sessao.php';


$nome= mysqli_real_escape_string($conn, $_POST['nome']);
$nome = strtoupper($nome); 
$setor = $_POST["setor"];

    $result_condutor = "select * from condutor where nome = '$nome' LIMIT 1";
		$resultado_condutor = mysqli_query($conn, $result_condutor);
		$resultado = mysqli_fetch_assoc($resultado_condutor);
		
		//Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
		if(isset($resultado)){
echo "<script>window.location='../cadastros/cadcondutor';alert('Condutor Ja Cadastrado!!!');</script>";
}
else{

$sql = "insert into condutor(nome,setor) values('$nome','$setor')";
$conn->query($sql);

echo "<script>window.location='../cadastros/cadcondutor';alert('Cadatro Efetuado com Sucesso!!');</script>";
}
 
?>
