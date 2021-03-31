 <!-- 
    Nina Rosita
    203040082
    Kamis jam 8
 -->
<?php 
	if (!isset($_GET['id'])) {
		header("location: ../index.php");
		exit;
	}
	require 'function.php';
	$id =$_GET['id'];
	$mhs = query("SELECT * FROM mahasiswa WHERE id =$id")[0];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>latihan4c</title>
</head>
<body>
	<div class="">
		<div class="gambar">
			<img src="assets/img/<?= $mhs["img"];	?>" alt="">
		</div>
		<div class="keterangan">
			<p><?= $mhs["nrp"];?></p>
			<p><?= $mhs["nama"];?></p>
			<p><?= $mhs["email"];?></p>
			<p><?= $mhs["jurusan"];?></p>
		</div>

		<button class="tombol kembali"><a href="../latihan4c_php/index.php">Kembali</a></button>	
	</div>
</body>
</html>