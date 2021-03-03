
<!-- Nina Rosita 203040082 Kamis 08.00 -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>NinaRosita_203040082_Kamis08</title>
        <style>
            div {
                background-color: salmon;
                display: inline-block;
                width: 50px;
                height: 50px;
                border-radius: 100%;
                border: 2px solid black;
                line-height: 50px;
                text-align: center;
                margin: 0px 5px 10px 0px;
            }
        
        </style> 
    </head>
    <body>
        <table>

            <?php for ($i = 1; $i <= 3; $i++) { ?>
                
                <?php for ($z = 1; $z <= $i; $z++) { ?>
                   <div><?= $i?></div>
                <?php
                    }
                ?>
                <br>
            <?php } ?>

        </table>
    </body>
</html>