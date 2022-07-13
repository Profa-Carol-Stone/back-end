<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Diretórios e arquivos</title>
</head>
<body>
<?php 

// Lendo e exibindo o conteúdo de um arquivo
$file =fopen("tmp.txt","r");

$contents =fread($file,filesize("tmp.txt"));

fclose($file);

echo $contents;

// unlink("tmp.txt");

// Outros comandos para manipular arquivos:
// www.php.net/manual/pt_BR/ref.filesystem.php

?>
</body>
</html>