<!-- <?php
// melakukan pengulangan pada array
// for/foreach
$angka = ["92", "93", "94", "95","96", "97", "98","90","100"];
?>

<!DOCTYPE html>
<html>
<head>
	<title>latihan 2 </title>
	<style>
		.kotak {
			width: 50px; 
			height:50px;
			background-color: blue;
			text-align: center;
			line-height: 50px;
			margin :3px;
			float: left;
		}
		.clear {clear:both;}	
	</style>
</head>
<body> -->
<!-- 
<div>1,</div>
<div>2</div>
<div>3</div>
<div>4</div>
<div>5</div>
<div>6</div>
<div>7</div>
<div>8</div>	
-->
<?php for ($i=0; $i < count($angka); $i++) { ?>
  <div class="kotak">"<?php echo$angka[$i]; ?></div>
<?php } ?>
<div class="clear"><div>

<?php foreach ($angka as $angka) { ?>
  <div class="kotak"><php echo $a; ?></div>
<?php }?>
<div class="clear"></div>

<?php foreach ($a as $a) : ?>
  <div class="kotak"><?=  $a; ?></div> 
<?php endforeach; ?>

</body>
</html>