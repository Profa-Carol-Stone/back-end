<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulário de Contato</title>
</head>
<body>
<form action="process.php" method="post">
	<label>
		Nome:<input type="text" name="nome" id="nome"><br>
	</label>
	<label>
		Email:<input type="text" name="email" id="email"><br>
	</label>
	<label>
		Mensagem:<textarea name="mensagem" id="mensagem"></textarea><br>
	</label>
	<input type="submit" value="Enviar">
</form>
</body>
</html>