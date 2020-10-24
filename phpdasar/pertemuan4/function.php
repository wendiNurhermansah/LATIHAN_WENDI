<?php 
function salam($waktu, $nama) {
	return "selamat $waktu, $nama!";
}


 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>latihan function</title>
 </head>
 <body>
 
 	<h1><?php echo salam("pagi", "wendi"); ?></h1>

 </body>
 </html>