<?php 
	if ( isset($_POST["button"]) ) {
		if ( $_POST["nama"] == "Oreo" && $_POST["password"] == "oreo123") {
			header("Location: official.php");
			exit;
		} else {
			// maka tampilkan pesan kesalahan
			$error1 = true;
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Instagram</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<div class="header">
			<center>
				<img src="img/oreo.png">
			</center>

			<center>
				<form action="" method="post">
					<input type="text" name="nama" class="nama" placeholder="Username">

					<br>
					<br>

					<input type="password" name="password" class="password" placeholder="Password">

					<br>
					<br>

					<?php if ( isset($error1) ) : ?>
						<p class="warning">Username atau Password salah!</p>
					<?php endif; ?>

					<button type="submit" name="button" class="btn">Login</button>
				</form>

				<a href="#">Forgot password?</a>
				<p>Don't have an account? <a href="#" class="sgup">Sign up</a></p>
			</center>
		</div>
	</div>
</body>
</html>