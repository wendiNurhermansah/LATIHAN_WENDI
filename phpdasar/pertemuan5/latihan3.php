<?php 

$mahasiswa = [
 ["wendi", "098267", "hukum", "wendi@gmail.com"],
  ["nurhermansah", "008267", "hukum", "nurher@gmail.com"]
];

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>daftar mahasiswa</title>
 </head>
 <body>
 	<h1>daftar mahasiswa</h1>

 	<?php foreach ($mahasiswa as $mhs) : ?>
 	<ul>
 		<li><?= $mhs[0]; ?></li>
 		<li><?= $mhs[1]; ?></li>
 		<li><?= $mhs[2]; ?></li>
 		<li><?= $mhs[3]; ?></li>
 	</ul>
 	<?php endforeach; ?>

 </body>
 </html>