<!-- Nina Rosita 203040082 Kamis 08.00 -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>NinaRosita_203040082_Kamis08</title>
        <style>
            .kotak {
                width: 50px;
                height: 50px;
                display: inline-block;
                border: 2px solid black;
            }

            .salmon {
                background-color: salmon;
            }

            .biru {
                background-color: lightblue;
            }
        
        </style>

    </head>
    <body>
        <table>

            <?php for ($kolom = 1; $kolom <= 6; $kolom++) :
                for ($baris = 1; $baris <= 6; $baris++) :
                    if ($kolom % 2 == !0) :
                        if ($baris % 2 == !0) : ?>
                            <div class="kotak biru"></div>
                        <?php else : ?>
                            <div class="kotak salmon"></div>
                        <?php endif;?>

                        <?php else : 
                        if ($baris % 2 == !0) : ?>
                            <div class="kotak salmon"></div>
                        <?php else : ?>
                            <div class="kotak biru"></div>
                        <?php endif;?>
                    <?php endif;?>
                <?php endfor;?>

                <br>
                 
            <?php endfor; ?>
            
        </table>
    </body>
</html>