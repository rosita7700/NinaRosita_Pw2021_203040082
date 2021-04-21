<!-- 
    Nina Rosita
    203040082
    Kamis jam 8
-->
<?php
    //melakukan koneksi ke database
    function koneksi_db() {
        $conn = mysqli_connect ("localhost", "root", "");
        mysqli_select_db ($conn, "praktikum");

        return $conn;
    }

    // melakukan query dan memasukkan ke dalam array
    function query($sql) {
        $conn = koneksi_db();
        $result = mysqli_query($conn, "$sql");
        $rows = [];

        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    function tambah($data) {
        $conn = koneksi_db();

        $img = htmlspecialchars($data['img']);
        $nama_barang = htmlspecialchars($data['nama_barang']);
        $detail = htmlspecialchars($data['detail']);
        $ukuran = htmlspecialchars($data['ukuran']);
        $warna = htmlspecialchars($data['warna']);
        
        $query = "INSERT INTO pw_tubes_203040082 VALUES
                    ('', '$img', '$nama_barang', '$detail', '$ukuran', '$warna')";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

?>