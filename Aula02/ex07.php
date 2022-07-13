<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Foreach</title>
</head>
<body>
<?php

$funcionarios = array(
	array("Id"=>1, "nome"=>"Fulano", "salario"=>6000),	
	array("Id"=>2, "nome"=>"Ciclano", "salario"=>1500),	
	array("Id"=>3, "nome"=>"Beltrano", "salario"=>8900),	
);

/*

foreach ($funcionarios as $funcionario) {
	echo "<p>Id: ".$funcionario["id"]."<br>";
	echo "Nome: ".$funcionario["nome"]."<br>";
	echo "Salário: ".$funcionario["salario"]."</p>";
}

*/
foreach($funcionarios as $funcionario){
	echo "<p>";
	foreach($funcionario as $chave => $valor){
		echo "$chave: $valor<br>";
	}
	echo "</p>";
}


?>
</body>
</html>



