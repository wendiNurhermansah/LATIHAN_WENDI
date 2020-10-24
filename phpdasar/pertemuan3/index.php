<!DOCTYPE html>
<html>
<head>
	<title>latihan 1</title>

</head>
<body>

<!-- <table border="1" cellpadding="10" cellspacing="0">
	<?php 
		// for ($i = 1; $i <= 3; $i++ ) {  
		// 	echo "<tr>";
		// 	for ( $j = 1; $j <= 5; $j++ ) {
		// 		echo "<td>$1, $j</td>";
		// 	}
		// 	echo "</tr>";
		// }
	 ?>
</table> -->
<table border="1" cellpadding="10" cellspacing="0">

	<?php for( $i = 1; $i <= 2; $i++ ) : ?>
	<tr>
		<?php for( $j = 1; $j <= 4; $j++) :?>
			  <td><?php  echo "$i, $j"; ?></td>

		<?php endfor ?>
	</tr>
	<?php endfor ?>
	
</table>
<br>
<table border="3" cellpadding="15" cellspacing="0">
	<?php for( $i = 1; $i <= 4; $i++ ) : ?>
		<tr>
			<?php for($a = 1; $a <= 2; $a++) : ?>
				<td><?php echo "$i, $a" ?></td>
			<?php endfor ?>
		</tr>
	<?php endfor ?>
</table>

</body>
</html>