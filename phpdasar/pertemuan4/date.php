<?php 
	// date
	// untukmenampilkan tanggal dengan format tertentu
	// echo date("l, d-M-y");


// time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 january 1970
// echo time();


// menghitug 100 hari kebelakang
// echo date ("d M Y", time()-60*60*24*100);



// mk time
// membuat sendiri detik
// mktime(jam, menit, detik, bulan, tanggal, tahun)

// echo date ("l", mktime(0,0,0,7,11,98));
 

// strtotime
echo date("l", strtotime("11 juli 1998"));

 ?>