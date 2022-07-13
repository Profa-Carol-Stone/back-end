<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Diretórios e arquivos</title>
</head>
<body>
<?php 

$path = "../Aula02";

// dir() classe para abrir e ler o conteúdo de um diretório
$aux = dir($path);

// read() retorna a entrada atual do diretório e move o ponteiro para a próxima entrada
while($arquivo = $aux -> read()){
	echo "<a href='".$path."/".$arquivo."'>".$arquivo."</a><br>";
}
// close() encerra o uso da classe dir
$aux -> close();

?>
</body>
</html>