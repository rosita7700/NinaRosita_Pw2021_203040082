<?php
    require 'functions.php';

    $id = $_GET['id'];
    $baju = query("SELECT * FROM pw_tubes_203040082 WHERE id = $id") [0];

    if(isset($_POST["ubah"])) {
        if(ubah($_POST) > 0) {
            echo "<script>
                alert('Data Berhasil diubah!');
                document.location.href = 'admin.php';
            </script>";
        } else {
            echo "<script>
                alert('Data Gagal diubah!');
                document.location.href = 'admin.php';
            </script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- My CSS -->
    <link rel="stylesheet" href="../css/tambah.css" />

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="../css/bootstrap.css?v2" />
    <title>Ubah Data Barang</title>
</head>

<body>
    <h1>Form Ubah Data Barang</h1>

    <form action="" method="post">

        <div class="form-group hidden-input">
            <div>
                <input type="hidden" class="form-control-file" name="id" value="<?= $baju['id']; ?>">
            </div>
        </div>

        <div class="form-group">
            <label for="img">Gambar</label>
            <div>
                <input type="text" class="form-control-file " name="img" id="img" required value= "<?= $baju['img'];?>">

            </div>
        </div>
        </div>
        <div class="form-group">
            <label for="nama_barang">Nama Barang</label>
            <div>
                <input type="text" class="form-control" name="nama_barang" id="nama_barang" required value= "<?= $baju['nama_barang'];?>">
            </div>
        </div>
        <div class="form-group">
            <label for="detail">Detail</label>
            <div>
                <input type="text" class="form-control" name="detail" id="detail" required value= "<?= $baju['detail'];?>">
            </div>
        </div>
        <div class="form-group">
            <label for="ukuran">Ukuran</label>
            <div>
                <input type="text" class="form-control" name="ukuran" id="ukuran" required value= "<?= $baju['ukuran'];?>">
            </div>
        </div>
        <div class="form-group">
            <label for="warna">Warna</label>
            <div>
                <input type="text" class="form-control" name="warna" id="warna" required value= "<?= $baju['warna'];?>">
            </div>
        </div>
        
        <div class="form-btn text-center">
            <button type="submit" class="add-btn btn btn-primary btn-lg btn-block mb-1 mt-6" name="ubah">Ubah
                Data!</button>
            <br>
            <button class="btn btn-secondary btn-lg">
                <a href="../index.php" class="text-white" style="text-decoration: none; color: black;">Kembali</a>
            </button>
        </div>

    </form>
</body>

</html>