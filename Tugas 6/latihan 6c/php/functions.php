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

    function hapus($id) {
        $conn = koneksi_db();
        mysqli_query($conn, "DELETE FROM pw_tubes_203040082
         WHERE id = $id");

        return mysqli_affected_rows($conn);
    }

    function ubah($data) {
        $conn = koneksi_db();
        $id = htmlspecialchars($data['id']);
        $img = htmlspecialchars($data['img']);
        $nama_barang = htmlspecialchars($data['nama_barang']);
        $detail = htmlspecialchars($data['detail']);
        $ukuran = htmlspecialchars($data['ukuran']);
        $warna = htmlspecialchars($data['warna']);
        
        $query = "UPDATE pw_tubes_203040082
         SET
                img = '$img',
                nama_barang = '$nama_barang',
                detail = '$detail',
                ukuran = '$ukuran',
                warna = '$warna'
                WHERE id = $id
            ";
        
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function registrasi($data) {
        $conn = koneksi_db();
        $username = strtolower(stripcslashes($data["username"]));
        $password = mysqli_real_escape_string($conn, $data["password"]);

        //cek username sudah ada atau belum
        $result = mysqli_query($conn, "SELECT username FROM user WHERE username ='$username'");
        if(mysqli_fetch_assoc($result)) {
            echo "<script>
                    alert('username sudah digunakan');
                </script>";
            return false;
        
        }
        // enkripsi password
        $password = password_hash($password, PASSWORD_DEFAULT);

        // tambah user baru
        $query_tambah = "INSERT INTO user VALUES('', '$username', 'password')";
        mysqli_query($conn, $query_tambah);
        return mysqli_affected_rows($conn);
    }
?>