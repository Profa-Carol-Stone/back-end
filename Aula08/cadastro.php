<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
</head>
<body>
	<h1>Formulário de Cadastro</h1>
	<form action="process_cadastro.php" method="post">
		<label>
			Nome:
			<input type="text" name="nome" id="nome">
		</label><br>
		<label>
			E-mail:
			<input type="text" name="email" id="email">
		</label><br>
		<label>
			Senha:
			<input type="password" name="senha" id="senha">
		</label><br>
		
		<input type="submit" value="Cadastrar">
	</form>
</body>
</html>