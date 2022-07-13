<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>While versus For</title>
</head>
<body>
<?php 

// while: repetições infinitas
$i = 1;
while ($i <= 10) {
    echo $i."<br>";
    $i++;
}

// repetições finitas
for($i=1;$i<=10;$i++)
	echo $i."<br>";
?>

</body>
</html>