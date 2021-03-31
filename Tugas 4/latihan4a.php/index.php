<!-- 
    Nina Rosita
    203040082
    Kamis jam 8
 -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Latihan4a</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container">
		<center>
		<table class="tabel1">
			<tr>
				<th>No</th>
				<th>Foto</th>
				<th>Nrp</th>
				<th>Nama</th>
				<th>Email</th>
				<th>Jurusan</th>
			</tr>
			<?php
			// Untuk Melakukan Koneksi Ke Database
			$conn=mysqli_connect("localhost", "root", "");
			// Memilih Database
			mysqli_select_db($conn, "pw_tubes_203040082");
			//Melakukan QUery Dari Database
			$result = mysqli_query($conn, "SELECT * FROM mahasiswa"); 
			$i = 1?>
			<?php while ($row = mysqli_fetch_assoc($result)) : ?>
				<tr>
					<td><?= $i ?></td>
					<td><img src="assets/img/<?= $row["img"]; ?>"></td>
					<td><?= $row["nrp"] ?></td>
					<td><?= $row["nama"]?></td>
					<td><?= $row["email"]?></td>
					<td><?= $row["jurusan"]?></td>
				</tr>
				<?php $i++ ?>
			<?php endwhile; ?>
		</table>
		</center>
	</div>
</body>
</html>