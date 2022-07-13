<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Foreach</title>
</head>
<body>
<?php

$funcionarios = array("Fulano", "Ciclano", "Beltrano");

foreach ($funcionarios as $chave => $valor) {
	echo "$chave: $valor<br>";
}

?>
</body>
</html>