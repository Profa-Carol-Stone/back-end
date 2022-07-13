<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Continue</title>
</head>
<body>
<?php

$funcionarios = array(
	array("id"=>1, "nome"=>"Fulano", "salario"=>6000),	
	array("id"=>2, "nome"=>"Ciclano", "salario"=>1500),	
	array("id"=>3, "nome"=>"Beltrano", "salario"=>8900),	
);

foreach ($funcionarios as $chave => $funcionario) {
	if($funcionario["salario"] >= 5000) continue;

	$funcionarios[$chave]["salario"] *= 1.1;
}

foreach ($funcionarios as $funcionario) {
	echo "<p>Id: ".$funcionario["id"]."<br>";
	echo "Nome: ".$funcionario["nome"]."<br>";
	echo "Salário: ".$funcionario["salario"]."</p>";
}

?>
</body>
</html>