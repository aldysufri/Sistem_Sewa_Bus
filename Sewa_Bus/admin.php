<?php 
if(isset($_POST[""]))

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>TA SBD</title>
	<link rel="stylesheet" type="text/css" href="assets/style.css">
</head>
<body>
 	<h1>SELAMAT DATANG ADMIN PO.ASTORE JAYA</h1>
	<h3>JL.Tlogomulyo, RT.05/02, Pedurungan, Semarang</h3>

	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
 
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
 
		<form action="login_admin.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">
 
			<input type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>
			<center>
				<a class="link" href="registrasi.php">kembali</a>
			</center>
		</form>
		
	</div>
 
</body>
</html>