<?php
    // menghubungkan dengan file php lainnya
    require '../php/functions.php';

    
    $toko_baju = cari($_GET['keyword']);


    
?>

<table class="table table-striped">
            <thead>
                <tr class="bg-success text-center text-white">
                    <th scope="col">No.</th>
                    <th scope="col" colspan="2"></th>
                </tr>
            </thead>
            <tbody>

                <?php if (empty($toko_baju)) : ?>
                <tr>
                    <td colspan="2" class="text-center">
                        <h1>Data tidak ditemukan</h1>
                    </td>
                </tr>
                <?php else : ?>
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
                <?php endif; ?>
            </tbody>
</table>