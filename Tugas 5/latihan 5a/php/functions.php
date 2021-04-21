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

?>