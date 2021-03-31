 <!-- 
    Nina Rosita
    203040082
    Kamis jam 08.00
 -->
<?php
// Untuk Melakukan Koneksi Ke Database
$conn=mysqli_connect("localhost", "root", "");
// Memilih Database
mysqli_select_db($conn, "mahasiswa.sql");
//Melakukan QUery Dari Database
$result = mysql_query($conn, "SELECT * FROM mahasiswa"); 
?>