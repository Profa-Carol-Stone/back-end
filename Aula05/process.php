<?php 
$nome = $_POST["nome"];
$email = $_POST["email"];
$mensagem = $_POST["mensagem"];

$to = "suporte@email.aulasdigitais.com.br";
$subject = "Contado do Site";
$mensagem = $mensagem;
$headers = array(
	'From' => $email,
	'X-Mailer' => 'PHP/'.phpversion()
);

$e = mail($to, $subject, $mensagem, $headers);

var_dump($e);
?>