<?php 
// $_GET
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
	<title>get</title>
</head>
<body>

	<h1>daftar mahasiswa</h1>
	<ul>
	<?php foreach( $mahasiswa as $mhs ) : ?>
			<li>
				<a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>"><?= $mhs["nama"] ?></a>
			</li>
			
	<?php endforeach; ?>
	</ul>

</body>
</html>