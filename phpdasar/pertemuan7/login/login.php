<?php 
if( isset($_POST["submit"]) ) {

	if( $_POST["username"] == "admin" && $_POST["password"] == "123" ) {
		header("Location: admin.php");
		exit;
	} else {
		$error = true;
	}

}




 ?>


<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
<?php if( isset($error) ) :?>
	<p>username / password salah</p>
<?php endif; ?>

	<h1>login admin</h1>
<ul>
	<form action="" method="post">
		<li>
			<label for="username">uesername : </label>
			<input type="text" name="name" id="username">
		</li>
		<li>
			<label for="password">password : </label>
			<input type="password" name="password" id="password">
		</li>
		<br>
			<button type="submit" name="submit">LOG IN</button>
		



	</form>
</ul>

</body>
</html>