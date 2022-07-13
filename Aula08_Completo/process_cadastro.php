<?php
require("conecta.php");

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];

try {

	$stmt = $conn->prepare("INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES (NULL, :nome, :email, :senha);");
	$stmt->bindParam("nome",$nome);
	$stmt->bindParam("email",$email);
	$stmt->bindParam("senha",$senha);
	
	if($stmt->execute()){
		header("Location:index.php?msg=Usuario cadastrado com sucesso!");
	}
	else{
		header("Location:index.php?msg=Erro na inclusão do usuário!");
	}


} catch(PDOException $e) {
	$e->getMessage();
}

$conn = null;
$stmt = null;
?>
