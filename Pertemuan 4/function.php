<?php
function Hallo ($waktu = "Datang", $nama=""){
	return "$waktu, $nama!";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Latihan Function</title>
</head>
<body>
	<h1><?php  echo Hallo("Selamat", "Nina");?></h1>
</body>
</html>