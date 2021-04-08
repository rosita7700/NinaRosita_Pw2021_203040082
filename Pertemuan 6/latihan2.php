<?php 
// $mahasiswa = [
//     ["Qisti Izatussyabani", "203040083", "203040083@mail.unpas.ac.id", "Teknik Informatika"],
//     ["Gania Rahma", "20304097", "Gania4321@mail.com", "Teknik Informatika"]
// ];

// ARRAY Associative
// definisisnya sama spt ARRAY Numerik, kecuali
//pada ARRAY Associative key-nya adalah String yang kita buat sendiri
$mahasiswa = [
    [
        "nrp" => "203040082",
        "nama" => "Nina Rosita",
        "email" => "ninaarosita25@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "nina.jpeg",
    ],
    [
        "nrp" => "203040083",
        "nama" => "Dody",
        "email" => "Dody25@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "nina.jpeg",
    ]
];
// echo $mahasiswa[1]["nama"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <li>
            <img src="img/<?= $mhs["gambar"]; ?>">
        </li>
        <li>Nama : <?php echo $mhs["nama"]; ?></li>
        <li>NRP : <?php echo $mhs["nrp"]; ?></li>
        <li>Email : <?php echo $mhs["email"]; ?></li>
        <li>Jurusan : <?php echo $mhs["jurusan"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>