<?php
// Get
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
        "nama" => "jesi",
        "email" => "jesis25@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "nina.jpeg",
    ],
];
var_dump($_GET);
?>
<!DOCTYPE html>
<html>
<head>
    <title>GET</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<?php foreach($mahasiswa as $mhs) :?>
    <ul>
        <a herf="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=
        <?= $mhs["nrp"]; ?>&email="<?= $mhs["email"]; ?>
        &jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs ["nama"];?></a>
    </ul>
<?php endforeach; ?>
</body>
</html>

