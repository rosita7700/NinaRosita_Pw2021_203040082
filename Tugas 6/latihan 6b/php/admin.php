<?php
    require 'functions.php';

    if(isset($_GET['cari'])) {
        $keyword = $_GET['keyword'];
        $toko_baju = query ("SELECT * FROM pw_tubes_203040082 WHERE
                    nama_barang LIKE '%$keyword%' OR
                    detail LIKE '%$keyword%' OR                 
                    ukuran LIKE '%$keyword%' OR        
                    warna LIKE '%$keyword%' ");

    } else {
        $toko_baju = query ("SELECT * FROM pw_tubes_203040082");
    }
   
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

        <div class="add">
            <a href="tambah.php">Tambah Data</a>
        </div>

        <form class="search" action="" method="get">
            <div class="form-group">
                <input type="text" class="form-control" name="keyword" autofocus>
                <button type="submit" class="btn btn-info" name="cari">Cari !</button>

            </div>
        </form>
        
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

            <!-- cek data di cari atau tidak -->
            <?php if (empty($toko_baju)) : ?>
            <tr>
                <td colspan="9">
                    <h1>Data tidak ditemukan</h1>
                </td>
            </tr>
            <?php else : ?>

            <?php $i = 1; ?>
            <?php foreach ($toko_baju as $baju) : ?>
                <tbody>
                    <tr>
                        <td>
                            <b><?= $i; ?></b>
                        </td>
                        <td>
                            <div class=" wrapper-opt-btn">
                                <a href="ubah.php?id=<?= $baju['id']; ?>">
                                    <button type="button">Ubah</button>
                                </a>
                                <a href="hapus.php?id=<?= $baju['id'] ?>" onclick="return confirm('Hapus Data?')">
                                    <button type="button">Hapus</button>
                                </a>
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
            <?php endif; ?>
        </table>
    </div>
</body>

</html>