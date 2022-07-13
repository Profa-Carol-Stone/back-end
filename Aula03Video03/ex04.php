<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Diretórios e arquivos</title>
</head>
<body>
<?php 

// Criando/abrindo arquivo
$file = fopen("tmp.txt","w");

fwrite($file,'Olá Mundo!');

fclose($file);

?>
</body>
</html>