<?php
    //mengecek apakah ada id yang dikirimkan
    //jika tidak maka akan dikembalikan ke halaman index.php
    if (!isset($_GET['id'])) {
        header("location: ./index.php");
        exit;
    }

    require 'functions.php';

    //mengambil id dari url
    $id = $_GET['id'];

    //melakukan query dengan parameter id yang diambil dari url
    $mahasiswa = query("SELECT * FROM mahasiswa WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- my css -->
    <link rel="stylesheet" href="../css/detail.css?v2">

    <!-- bootstrap css -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Detail kaset</title>
</head>

<body>
    <div class="container">

        <table>
            <tbody>
                <tr>
                    <td colspan="2">
                        <div class="gambar text-center">
                            <img src="../assets/img/<?= $mahasiswa["gambar"]; ?>" class="rounded">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th class="ket-data"></th>
                    <td>
                        <div class="keterangan">
                            <p class="nama_barang"><?= $mahasiswa["Nama_barang"]; ?></p>
                        </div>
                    </td>
                </tr>

                <tr>
                    <th class="ket-data">Rilis Barang</th>
                    <td>
                        <div class="keterangan">
                            <p><?= $kaset["rilis_Barang"]; ?></p>
                        </div>
                    </td>
                </tr>

                <tr>
                    <th class="ket-data">Stok Barang</th>
                    <td>
                        <div class="keterangan">
                            <p><?= $kaset["stock_kaset"]; ?></p>
                        </div>
                    </td>
                </tr>

                <tr>
                    <th class="ket-data">Harga barang</th>
                    <td>
                        <div class="keterangan">
                            <p>Rp. <?= $kaset["harga"]; ?></p>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <div class="back-btn text-center">
                            <a class="btn btn-secondary" href="../index.php">Kembali</a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>