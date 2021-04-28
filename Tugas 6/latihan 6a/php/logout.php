<!-- 
    Nina Rosita
    203040082
    Kamis jam 8
-->
<?php 
session_start();
session_destroy();
header("Location: ../index.php");
die;
?>