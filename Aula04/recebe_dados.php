<?php 
$nome = $_POST["nome"];
$email = $_POST["email"];

if($nome == ""){
	header("Location:formulario.php?erro=1&email=$email");
}
?>