<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Break</title>
</head>
<body>
<?php

$funcionarios = array(
	array("id"=>1, "nome"=>"Fulano", "salario"=>6000),	
	array("id"=>2, "nome"=>"Ciclano", "salario"=>1500),	
	array("id"=>3, "nome"=>"Beltrano", "salario"=>8900),	
);

$id = 1;
foreach ($funcionarios as $funcionario) {
	if($funcionario["id"] == $id){
		$busca = $funcionario;
		break;
	}
}

if(isset($busca)){
	echo "Id: ".$busca["id"]."<br>";
	echo "Nome: ".$busca["nome"]."<br>";
	echo "Salário: ".$busca["salario"];
}
else{
	echo "Funcionário não encontrado";
}

?>
</body>
</html>