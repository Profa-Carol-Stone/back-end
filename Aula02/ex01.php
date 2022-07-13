<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>If</title>
</head>
<body>
<?php

$mes = date("m");

if ($mes == 1) $mes = "Janeiro";
elseif ($mes == 2) $mes = "Fevereiro";
elseif ($mes == 3) $mes = "Março";
elseif ($mes == 4) $mes = "Abril";
elseif ($mes == 5) $mes = "Maio";
elseif ($mes == 6) $mes = "Junho";
elseif ($mes == 7) $mes = "Julho";
elseif ($mes == 8) $mes = "Agosto";
elseif ($mes == 9) $mes = "Setembro";
elseif ($mes == 10) $mes = "Outubro";
elseif ($mes == 11) $mes = "Novembro";
elseif ($mes == 12) $mes = "Dezembro";

echo $mes;

?>
</body>
</html>