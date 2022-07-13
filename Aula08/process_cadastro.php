<?php
include("conecta.php");

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];

try {

	$stmt = $conn->prepare("INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES (NULL, :nome, :email, :senha)");
	$stmt->bindParam("nome",$nome);
	$stmt->bindParam("email",$email);
	$stmt->bindParam("senha",$senha);
	
	if($stmt->execute()){
		echo "Usuario cadastrado com sucesso!";
	}
	else{
		echo "Erro no cadastrado do usuário.";
	}


} catch(PDOException $e) {
	$e->getMessage();
}

$conn = null;
$stmt = null;
?>
