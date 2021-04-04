<?php
	// Date
	// Untuk Menampilkan tanggal dengan format 
	// tertentu
	// echo date("l, d-m-y");
	 // echo  date("L");
	 // echo  date("D");
	 // echo  date("M");
	 // echo  date("Y");
	 // echo  date("l");
	 // echo  date("d");
	 // echo  date("m");
	 // echo  date("y");


	// Time
	// UNIX TImestamp / EPOCH time
	// detik yang sudah berlaku sejak 1 january 1970
	// echo time ();
	// echo date(" D M Y", time()+90*90*20*100);
	// echo date("L M Y", time() + 23*2382*2228*1);  
	
	// MKtime
	// Membuat sendiri Detik 
	// mktime (0,0,0,0,0,0,)
	// jam, menit, detik, bulan, tanggal, tahun
	// echo  date("l", mktime(0,0,0,8,05,2001));
	// echo mktime(0,0,0,12,05,2001);
	
	// strtotime
	// echo date("l", strtotime("05 des 2001"));
 ?>