<?php
    //mengecek apakah ada id yang dikirimkan
    //jika tidak maka akan dikembalikan ke halaman index.php
    

    require 'functions.php';

    //mengambil id dari url
   

    //melakukan query dengan parameter id yang diambil dari url
    $toko_baju = query("SELECT * FROM pw_tubes_203040082");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- my css -->
    <link rel="stylesheet" href="../css/admin.css?v2">

    <!-- bootstrap css -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Detail Barang</title>
</head>

<body>
    <div class="container">

        <table cellpadding="10" cellspacing="0" border="1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Opsi</th>
                    <th>Gambar</th>
                    <th>Nama Baju</th>
                    <th>Detail</th>
                    <th>Ukuran</th>
                    <th>Warna</th>
                    
                </tr>
            </thead>
            <?php $i = 1; ?>
            <?php foreach ($toko_baju as $baju) : ?>
                <tbody>
                <tr>
                    <td>
                        <b><?= $i; ?></b>
                    </td>
                    <td>
                        <div class=" wrapper-opt-btn">
                            <a href=""><button type="button" class="btn btn-primary btn-sm">Ubah</button></a>
                            <a href=""><button type="button" class="btn btn-danger btn-sm">Hapus</button></a>
                        </div>
                    </td>
                    <td>
                        <img src="../assets/img/<?= $baju["img"]; ?>" alt="">
                    </td>
                    <td><?= $baju["nama_barang"]; ?></td>
                    <td><?= $baju["detail"]; ?></td>
                    <td><?= $baju["ukuran"]; ?></td>
                    <td><?= $baju["warna"]; ?></td>
                    
                </tr>
            </tbody>
            <?php $i++; ?>
            <?php endforeach; ?>
        </table>
    </div>
</body>

</html>