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
	require 'functions.php';
	$id =$_GET['id'];
	$baju = query("SELECT * FROM pw_tubes_203040082 WHERE id =$id")[0];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<!-- my css -->
	<link rel="stylesheet" href="../css/detail.css?v2">

	<!-- bootstrap css -->
	<link rel="stylesheet" href="../css/bootstrap.css">
	<title>latihan6c</title>
</head>
<body>
	<div class="detail_barang">
		<div class="gambar">
		<img src="../assets/img/<?= $baju["img"]; ?>" width="150">
		</div>
		<div class="keterangan">
			<p><?= $baju["nama_barang"];?></p>
			<p><?= $baju["detail"];?></p>
			<p><?= $baju["ukuran"];?></p>
			<p><?= $baju["warna"];?></p>
		</div>

		<button class="tombol kembali"><a href="../index.php">Kembali</a></button>	
	</div>
</body>
</html>
