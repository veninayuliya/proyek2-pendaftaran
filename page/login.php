<?php
session_start();
include '../koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="../css/login.css">
</head>
<body>
    <form method="post" class="box">
        <h1>LOGIN</h1>
        <input type="email" class="" name="email" size="40" placeholder="Masukkan email">
		<input type="password" class="" name="password" size="40" placeholder="Masukkan password">
		<input type="submit" name="login" value="Login"><br>
        <p>Belum punya akun? <a href="registrasi.php" class="daftar">Daftar</a></p>
    </form>
	<div>
		<?php
		//jika ada tombol login 
		if(isset($_POST["login"]))
		{
			$email = $_POST["email"];
			$password = $_POST["password"];
			//lakukan query mengecek akun di tabel user di db
			$data = mysqli_query($db,"SELECT * FROM users WHERE email_user='$email'
				AND password_user ='$password'");

			//ngitung akun yg terambil
			$akunbenar = mysqli_num_rows($data);

			//jika 1 akun cocok maka login
			if($akunbenar==1)
			{
				//anda login
				$akun = mysqli_fetch_assoc($data);
				if($akun['roles'] == "Administrator"){
					echo "<script>alert('Login Admin berhasil!')</script>";
					echo "<script>location='home-admin.php';</script>";
				}else if($akun['roles'] == "Panitia_PSB"){
					echo "<script>alert('Login Panitia berhasil!')</script>";
					echo "<script>location='home-panitia.php';</script>";
				}else{
					echo "<script>alert('Selamat datang')</script>";
					echo "<script>location='home.php';</script>";
				}
			}
			else
			{
				//anda gagal login
				echo "<script>alert('Login failed! Please try again')</script>";
				echo "<script>location='login.php';</script>";
			}
		}
		?>
</body>
</html>