<?php
include '../koneksi.php';
?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/registrasi.css">
	<title>Registrasi</title>
</head>
<body>
	<div class="box">
			<h2>Registrasi</h2>
			<form method="post">
				<p>Nama</p>
				<input type="text" class="" name="nama" placeholder="Masukkan nama" required>
				<p>Email</p>
				<input type="email" class="" name="email" placeholder="Masukkan email" required>
				<p>Password</p>
				<input type="password" class="" name="password" placeholder="Masukkan password" required>
				<br><br>
				<input type="submit" name="daftar" value="Daftar"><br>
			</form>
			<?php
			//jika daftar diklik
			if(isset($_POST["daftar"]))
			{
				//mengambil inputan
				$email = $_POST["email"];
				$password = $_POST["password"];
                $nama = $_POST["nama"];
				$roles = "User";

				//validasi
				$data = mysqli_query($db,"SELECT * FROM users WHERE email_user='$email'");
				$sama = mysqli_num_rows($data);
				if($sama==1)
				{
					echo "<script>alert('Registrasi GAGAL. Email sudah digunakan');</script>";
					echo "<script>location='registrasi.php';</script>";
				}
				else
				{
					//insert ke tabel user
					mysqli_query($db,"INSERT INTO users(email_user, password_user, nama_user, roles) VALUES ('$email','$password','$nama','$roles')");
					echo "<script>alert('Registrasi SUKSES. Silahkan login');</script>";
					echo "<script>location='login.php';</script>";
				}
			}
			?>
		</div>
</body>
</html>