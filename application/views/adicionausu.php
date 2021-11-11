<?php

include 'sessao.php';

$nome= mysqli_real_escape_string($conn, $_POST['nome']);
$nome = strtoupper($nome);
$login= mysqli_real_escape_string($conn, $_POST['login']);
$login = strtoupper($login);

$senha= mysqli_real_escape_string($conn, $_POST['senha']);
$senha = base64_encode($senha);

$result_usuario = "SELECT * FROM usuario WHERE login = '$login' LIMIT 1";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		$resultado = mysqli_fetch_assoc($resultado_usuario);
		
		//Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
		if(isset($resultado)){
echo "<script>window.location='../cadastros/cadusuario';alert('Usuario Ja Cadastrado!!!');</script>";
}
else{

$sql = "insert into usuario(nome,login,senha) 
values('$nome','$login','$senha')";
$conn->query($sql);

echo "<script>window.location='../cadastros/cadusuario';alert('Cadatro Efetuado com Sucesso!!');</script>";
}
 
?>
