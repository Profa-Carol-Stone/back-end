<?php 
require("autentica.php");
require("conecta.php");
$id = "";
if(!isset($_SESSION))
	session_start();
$id = $_SESSION['id_usuario'];

try {
	$stmt = $conn->prepare("SELECT * FROM `usuarios` WHERE `id` = :id");
	$stmt->bindParam("id",$id);
	$stmt->execute();

	$res = $stmt->fetchAll();
	
	if(count($res) > 0) {	
		foreach ($res as $row) {
			$nome = $row['nome'];
			$email = $row['email'];
			$senha = $row['senha'];
		}
		echo "Nome: $nome<br>";
		echo "Email: $email<br>";
		echo "Senha: $senha<br>";

  }
  else {
      header("Location:index.php");
  }

} catch(PDOException $e) {
	$e->getMessage();
}

$conn = null;
$stmt = null;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Área Restrita</title>
</head>
<body>
	<h1>Área restrita</h1>
	<p>Olá <?= $nome ?>
	<p>Conteúdo restrito a usuários cadastrados</p>
	<p><a href="sair.php">Sair</a>
</body>
</html>