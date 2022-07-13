<?php
include("conecta.php");

$email = $_POST["email"];
$senha = $_POST["senha"];

try {

// prepare():	Prepara uma instrução SQL para ser executada pelo método PDOStatement::execute(). 
// O modelo de instrução pode conter zero ou mais marcadores de parâmetro nomeados (:name) ou ponto de interrogação (?) para os quais os valores reais serão substituídos quando a instrução for executada.
// bindParam: vincula um parâmetro ao nome da variável especificada

	$stmt = $conn->prepare("SELECT * FROM `usuarios` WHERE `email` = :email AND `senha` = :senha");
	$stmt->bindParam("email",$email);
	$stmt->bindParam("senha",$senha);
	$stmt->execute();

	$res = $stmt->fetchAll();
	
	if(count($res) > 0) {	
		foreach ($res as $row) {
			$nome = $row['nome'];
		}
			echo "Usuário $nome logado";

  }
  else {
      echo "Usuário não cadastrado";
  }



} catch(PDOException $e) {
	$e->getMessage();
}

$conn = null;
$stmt = null;
?>
