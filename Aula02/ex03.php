<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Otimizando o Código</title>
</head>
<body>
<?php

$mes = date("n");
// n retorna mês sem o 0 na frente

$mes_extenso = array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");

echo $mes_extenso[$mes-1];
// -1 pq o array começa em 0

?>
</body>
</html>