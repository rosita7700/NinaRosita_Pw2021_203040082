<!-- 
    Nina Rosita
    203040082
    Kamis jam 8
-->
<?php 
session_start();
session_destroy();

setcookie('username', '', time() - 3600);
setcookie('hash', '', time() - 3600);
header("Location: ../index.php");
die;
?>
