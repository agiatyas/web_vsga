<?php 	
	// Date
	// untuk menampilkan tanggal dalam format tertentu
	// echo date("l, d-M-Y"); 

	// Time
	// UNIX Timestamp / EPOCH time
	// detik yang sudah berlalu sejak 1 januari 1970
	// echo time();
	// echo date("d m y", time()+60*60*24*367);

	// mktime
	// membuat sendiri detik
	// mktime(0,0,0,0,0,0)
	// jam, menit, detik, bulan, tanggal, tahun
	// echo date ("l", mktime(0,0,0,7,10,2001));

	// strtotime
	echo date("l", strtotime("10 oct 2001") );

?>	