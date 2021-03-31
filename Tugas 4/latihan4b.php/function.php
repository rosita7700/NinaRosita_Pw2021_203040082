<!-- 
    Nina Rosita
    203040082
    Kamis jam 8
-->
<?php

	$conn = mysqli_connect("Localhost", "root", "","mahasiswa.sql");
	



function query ($sql)
{
	global $conn;
	$result = mysqli_query($conn, $sql);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

?>