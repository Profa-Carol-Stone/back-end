<?php 
if(isset($_GET["erro"])){
	$aux = "Verifique o preenchimento dos campos do formulário";
}
else{
	$aux = "";
}
if(isset($_GET["email"])){
	$email = $_GET["email"];
}
else{
	$email = "";
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Meu Formulário</title>
</head>
<body>
<form action="recebe_dados.php" method="post">
	<label>Nome:
		<input type="text" name="nome" id="nome" required><br>
	</label>
	<label>
		E-mail:
		<input type="email" name="email" id="email" required value="<?php echo $email ?>"><br>
	</label>
	<input type="submit">
	<?php 
	echo $aux;
	?>
</form>
</body>
</html>