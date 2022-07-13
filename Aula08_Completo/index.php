<?php
$msg = "";
if (isset($_GET["msg"])){
	$msg = $_GET["msg"];
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
</head>
<body>
	<h1>Formulário de Login</h1>
	<form action="process_login.php" method="post">
		<label>
			E-mail:
			<input type="text" name="email" id="email">
		</label><br>
		<label>
			Senha:
			<input type="password" name="senha" id="senha">
		</label><br>
		<input type="submit" value="Logar">
	</form>
	<p><?php echo $msg; ?></p>
	<p><a href="cadastro.php">Cadastrar novo usuário</a></p>
</body>
</html>