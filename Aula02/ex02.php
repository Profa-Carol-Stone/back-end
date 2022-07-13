<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Switch</title>
</head>
<body>
<?php

//switch é um um if para operar sobre a mesma variável ou expressão de entrada

$mes = date("m");

switch ($mes) {
    case 1: $mes = "Janeiro"; break;
    case 2: $mes = "Fevereiro"; break;
    case 3: $mes = "Março"; break;
    case 4: $mes = "Abril"; break;
    case 5: $mes = "Maio"; break;
    case 6: $mes = "Junho"; break;
    case 7: $mes = "Julho"; break;
    case 8: $mes = "Agosto"; break;
    case 9: $mes = "Setembro"; break;
    case 10: $mes = "Outubro"; break;
    case 11: $mes = "Novembro"; break;
    case 12: $mes = "Dezembro"; break;
}

echo $mes;

?>
</body>
</html>