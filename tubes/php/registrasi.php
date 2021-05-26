<!-- 
    Nina Rosita
    203040082
    Kamis jam 8
-->
<?php
    require 'functions.php';

    if(isset($_POST["register"])) {
        if(tambah($_POST) > 0) {
            echo "<script>
                alert('Registrasi Berhasil');
                document.location.href = 'login.php';
            </script>";
        } else {
            echo "<script>
            alert('Registrasi Gagal');
            document.location.href = 'login.php';
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
    <!-- my css -->
    <link rel="stylesheet" href="./css/index.css">

    <!-- bootstrap css -->
    <link rel="stylesheet" href="./css/bootstrap.css">
    <title>Registrasi</title>
</head>

<body>
    <form action="" method="post">
        
        <table>
            <tr>
                <td><label for="username">Username</label></td>
                <td>:</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td><label for="password">Password</label></td>
                <td>:</td>
                <td><input type="password" name="password"></td>
            </tr>
        </table>
        <div class="remember">
            <input type="checkbox" name="remember"> 
            <label for="remember">Remember me</label>
        </div>
        <button type="submit" name="registrasi">REGISTER</button>
    </form>
</body>

</html>