<!-- 
  Nina Rosita
  203040082
 Kamis jam 08.00
-->
<?php
// Untuk Melakukan Koneksi Ke Database
$conn=mysqli_connect("localhost", "root", "");
// Memilih Database
mysqli_select_db($conn, "pw_tubes_203040082.sql");
//Melakukan QUery Dari Database
$result = mysqli_query($conn, "SELECT * FROM mahasiswa"); 
?>