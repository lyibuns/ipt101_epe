<!DOCTYPE html>
<html>

<head>
	<title>Multiplication Table</title>
	<style>
		body {
			text-align: center;
		}
	</style>
</head>

<body>

<?php

$num ="5";

 echo "<h1>Multiplication of $num</h1><br>";

$i = 1;
for ($i; $i <= 10; $i++) {
    echo "\t", $num, " X ", $i, " = ", $num * $i, "<br>";
}
?>

</body>
</html>