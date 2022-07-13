<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data e Hora</title>
</head>
<body>
<?php 

// d: dia do mês
// m: mês do ano
// y: ano
// j: dia sem o zero à esquerda
// n: mês sem o zero à esquerda
// Y: ano com 4 casas decimais
echo date("j/n/y")."<br>";

// l: dia da semana por extenso
echo date("l")."<br>";

// F: mês do ano por extenso
echo date("F")."<br>";

// h: hora
// i: minuto
// s: segundo
// A: AM/PM
echo date("h:i:s A")."<br>";

// Outras formas: Monday 4th of July 2022 03:12:46 PM
// S: número ordinal abreviado
echo date('l jS \of F Y h:i:s A')."<br>";

// Exibindo dia da semana de determinada data com mktime
echo "February 8, 1979 was a " . date("l", mktime(0, 0, 0, 2, 8, 1979))."<br>";


// para mais formatos consulte: https://www.php.net/manual/pt_BR/datetime.format.php
?>
</body>
</html>










