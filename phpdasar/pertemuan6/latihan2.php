<?php 
// $mahasiswa =[
// 	[ "wendi", "09388848", "wen@gmail.com", "hukum"],
// 	[ "adi", "09388848", "adi@gmail.com", "sosial"]
// ];

// array associative
$mahasiswa = [
	[
	"nama" => "wendi",
	"nrp" => "09837438",
	"email" => "wen@gmail.com",
	"jurusan" => "hukum"
],
[
	"nama" => "dodi",
	"nrp" => "098374388",
	"email" => "dod@gmail.com",
	"jurusan" => "hukum"
]

];


 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>daftar mahasiswa</title>
 </head>
 <body>

 	<h1>daftar mahasiswa</h1>
 	<?php foreach ( $mahasiswa as $mhs ) : ?>
 	<ul>
 		<li>nama : <?= $mhs["nama"]; ?></li>
 		<li>NRP : <?= $mhs["nrp"]; ?></li>
 		<li>emil : <?= $mhs["email"]; ?></li>
 		<li>jurusan : <?= $mhs["jurusan"]; ?></li>
 	</ul>
 <?php endforeach; ?>
 
 </body>
 </html>