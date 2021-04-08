<!DOCTYPE html>
<html>
<head>
	<title>POSt</title>
</head>
<body>
<?php if (isset ($_POST["Sumbit"])) : ?>
<?php endif;  ?>
 <h1>Halo, Selamat Datang <?= $_POST["nama"] ?> </h1>
<form action="" method="POST">
	Masukan Nama :
	<input type="text" name="nama">
	<br>
	<button type="Sumbit" name="Sumbit">Kirirm!</button>
</form>

</body>
</html>