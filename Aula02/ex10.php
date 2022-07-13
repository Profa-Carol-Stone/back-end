<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Continue</title>
</head>
<body>
<?php 
// continue: parar a iteração atual

$i = 0;
while ($i++ < 5) {
    if ($i == 3) continue;
    echo $i;
}

?>
</body>
</html>