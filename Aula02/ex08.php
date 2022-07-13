<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Break</title>
</head>
<body>
<?php
// break: interrompe a execução
$i = 0;
while ($i++ < 5) {
    if ($i == 3) break;
    echo $i."-";
}
?>
</body>
</html>