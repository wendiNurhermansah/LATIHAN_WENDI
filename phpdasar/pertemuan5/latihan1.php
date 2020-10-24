<?php 
// array
// variable yang dapat memiliki banyak nilai
// element pada array boleh memiliki data yang berbeda
// pasangan antara key dan value
// keynya adalah index yang di mulai dari 0

// membuat array cara lama
$hari = array("senin", "selasa", "rabu");
// cara baru
$bulan = ["januari", "februari", "maret"];
$arr1 = [123, "tulisan", false];

// menampilkan array
// var_dump() / print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";


// menampilkan satu element pada array
// echo $arr1[0];
// echo "<br>";
// echo $bulan[1];

// menambahkan element baru
var_dump($hari);
$hari[] = "kamis";
$hari[] = "jum'at";
echo "<br>";
var_dump($hari);
 ?>