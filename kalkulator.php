<!DOCTYPE html>
<html>
<head>
	<title>Kalkulator</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
 <div class="container bg-dark text-white">
 	<?php
 	$angka1 = null;
 	$angka2 = null;

 	if(isset($_GET['angka1'])) {
 		$angka1 = $_GET['angka1'];
 		$angka2 = $_GET['angka2'];
 		$hasil = 0;
 		$operasi = $_GET['operasi'];

 		switch ($operasi) {
 			case '+':
 				$hasil = $angka1+$angka2
 				break;
 			
 			case '-':
 				$hasil = $angka1-$angka2
 				break;
 			case '*':
 				$hasil = $angka1*$angka2
 				break;
 			case '/':
 				$hasil = $angka1/$angka2
 				break;
 		}
 	}


 	?>

 	<div class="rows">
        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="get">
            <h2>Kalkulator</h2>
            <div class="form-group">
                <label>Masukan angka:</label>
                <input type="text" name="angka1" class="form-control" value="<?php echo $angka1; ?>" required>
            </div>
            <div class="form-group">
                <label>Masukan angka:</label>
                <input type="text" name="angka2" class="form-control" value="<?php echo $angka2; ?>"  required>
            </div>
            <div class="form-group">
                <select class="form-control" name="operasi">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="x">x</option>
                    <option value="/">/</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">cek</button>
        </form>
        <br>
        <?php
        if (isset($_GET['angka1'])) {
            echo "<h1>$hasil</h1>";
        }
        ?>
    </div>

 </div>

</body>
</html>