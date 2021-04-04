<?php
// pengulangan
// for
// while
// do.. while
// foreach : pengulangan khusus array
// -------------------------------------------------------
// pengulangan for
// for ($i=0; $i <10 ; $i++) {	 
// 	echo "Nina <br> 	";
// }
// pengulangan while
// $i =0; 
// while ($i < 10) {
// 	echo "<b>Hallo Nina <br>";
// $i ++;
// }
// pengulangan do
// $i =0;
// do {
// 	echo "<b> Selamat datang Di Web <br>";
// $i ++;
// }while ( $i< 10)
 ?>
 <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1" cellpadding="10" cellspacing="0">
		<?php
			for ($i=0; $i <=10 ; $i++) {
				echo "<tr>";
				for ($j=1; $j <=1; $j++) { 
					echo "<td>$i,sj</td>";
				}
				echo "</tr>";
			}
		?>
	</table>
</body>
</html>
