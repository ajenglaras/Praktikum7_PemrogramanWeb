<!DOCTYPE html>
<html>
<head>
	<title>Form Login</title>
    <link rel="stylesheet" href="style.css"> <!--memanggil file css untuk style-->
	<!--style tampilan login-->
</head>
<body>
    <section>
		<!--form akan dikirim dengan method POST pada logincontroller-->
		<form action="login.php" method="POST">
			<h1>FORM LOGIN</h1>
			<label>Username</label>
			<input type="text" name="username" placeholder="masukkan username" required="" autofocus="">
			<label>Password </label>
			<input type="password" name="password" placeholder="masukkan password" required="" >
			<button type="submit">SUBMIT</button>
		</form>
    <br>
    <br>
		<!--menampilkan pesan-->
		<?php if(isset($_GET['pesan'])) { ?>
				<label>Upss <?php echo $_GET['pesan']; ?></label>
		<?php } ?>
    </section>	
</body>
</html>