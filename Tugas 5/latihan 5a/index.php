<!-- 
    Nina Rosita
    203040082
    Kamis jam 8
-->

<?php
    require 'php/functions.php';
    $mahasiswa = query("SELECT * FROM mahasiswa")
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Latihan5a</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container">
		
		<table class="tabel1">
				<tr>
					<th>No</th>
					<th>Gambar</th>
					<th>Nama Barang</th>
					<th>detail</th>
					<th>ukuran</th>
					<th>warna</th>
				</tr>
				<?php
				// Untuk Melakukan Koneksi Ke Database
				$conn=mysqli_connect("localhost", "root", "");
				// Memilih Database
				mysqli_select_db($conn, "pw_tubes_203040082.sql");
				//Melakukan QUery Dari Database
				$result = mysqli_query($conn, "SELECT * FROM mahasiswa"); 
				$i = 1?>
				<?php while ($row = mysqli_fetch_assoc($result)) : ?>
					<tr>
						<td><?= $i ?></td>
						<td><img src="assets/img/<?= $row["img"]; ?>"></td>
						<td><?= $row["no"] ?></td>
						<td><?= $row["nama barang"]?></td>
						<td><?= $row["detail"]?></td>
						<td><?= $row["ukuran"]?></td>
						<p><?= $mhs["warna"];?></p>
					</tr>
					<?php $i++ ?>
				<?php endwhile; ?>
			
			
			</div>
		</table>
			
		
	</div>
</body>
</html>

