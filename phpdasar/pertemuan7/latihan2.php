<?php 
// cek apakah tidak ada data di gate
if ( !isset($_GET["nama"]) ||
	!isset($_GET["nrp"]) ||
	!isset($_GET["email"]) ||
	!isset($_GET["jurusan"])) {
	header("Location: latihan1.php");
	exit;
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>detail mahasiswa</title>
</head>
<body>

	<ul>
		<li><?= $_GET["nama"]; ?></li>
		<li><?= $_GET["nrp"]; ?></li>
		<li><?= $_GET["email"]; ?></li>
		<li><?= $_GET["jurusan"]; ?></li>
	</ul>

	<a href="latihan1.php ?>">kembali ke halaman sebelumnya</a>

</body>
</html>