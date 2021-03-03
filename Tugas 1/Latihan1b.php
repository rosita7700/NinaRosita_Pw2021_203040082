<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>NinaRosita_203040082_Kamis08</title>
    </head>
    <body>
        <table border="1" cellspacing="0" cellpadding="10">

            <?php for ($i = 1; $i <= 5; $i++) { ?>
                <tr>
                    <?php for ($j = 1; $j <= 5; $j++) { ?>
                        <td>Baris <?= $i ?>, Kolom <?=$j?></td>
                    <?php
                        }
                    ?>
                </tr>  
            <?php } ?>
            <!-- Tambahkan baris kode php untuk menampilkan bagian body table -->

        </table>
    </body>
</html>