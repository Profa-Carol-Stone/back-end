<?php
require("conecta.php");

$email = $_POST["email"];
$senha = $_POST["senha"];


try {
	$sql = "SELECT * FROM `usuarios` WHERE `email` = '$email' AND `senha` = '$senha'";
	
	// query: executa uma instrução SQL
	// fetchAll: retorna o conjunto de resultados associado a um objeto (resultante de uma instrução PDO) em uma matriz
	$res = $conn->query($sql)->fetchAll();

  // count: conta os elementos de uma matriz
	if(count($res) > 0) {	
			echo "Usuário cadastrado";
  }
  else {
      echo "Usuário não cadastrado";
  }

} catch(PDOException $e) {
	echo $e->getMessage();
}
$conn = null;



?>
