<!-- 
    Nina Rosita
    203040082
    Kamis jam 8
-->

<?php
    // menghubungkan dengan file php lainnya
    require 'php/functions.php';

    // melakukan query
    $toko_baju = query("SELECT * FROM pw_tubes_203040082");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- my css -->
    <link rel="stylesheet" href="./css/index.css">

    <!-- bootstrap css -->
    <link rel="stylesheet" href="./css/bootstrap.css">
    <title>Daftar Barang</title>
</head>

<body>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr class="bg-success text-center text-white">
                    <th scope="col">No.</th>
                    <th scope="col" colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($toko_baju as $baju) : ?>
                <tr>
                    <td>
                        <div class="id">
                            <p class="text-center"><?= $baju["id"]; ?></p>
                        </div>
                    </td>
                    <td class="d-flex justify-content-between align-items-center">
                        <div class="nama_barang">
                            <p><?= $baju["nama_barang"]; ?></p>
                        </div>
                        <div class="btn-detail-baju">
                            <a class="btn btn btn-info btn-sm" href="./php/detail.php?id=<?= $baju["id"]; ?>">Lihat
                                Detail baju</a>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>