<html>
<head>
	<title>Ice Cream Online Shop</title>
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Palanquin+Dark&family=Sansita&family=Signika+Negative:wght@300&display=swap" rel="stylesheet">
</head>
<body>
	<section id="banner2">
	<div class="h2">
	<h2>SIGN UP</h2>
	</div>
	<div class="kembali">
	<a href="awal.php">< Kembali</a>
	</div>
	<div class="badan">
		<form method="POST" action="cek_signup.php">
			<p>Name</p>
			<div class="bdn">
			<input type="text" name="name" placeholder="Nama kamu....">
			</div>
			<p>Email</p>
			<div class="bdn">
			<input type="text" name="email" placeholder="....@gmail.com">
			</div>
			<p>Password</p>
			<div class="bdn">
			<input type="password" name="password" placeholder="Kata sandi....">
			</div>
			<p>Jenis Kelamin</p>
			<div class="bdn1">
			<input type="radio" name="gender" value="Laki-Laki"><label for="Laki-Laki">Laki-Laki</label><br>
			<input type="radio" name="gender" value="Perempuan"><label for="Perempuan">Perempuan</label><br>
			</div>
			<p>Kota</p>
			<div class="bdn">
			<select name="kota">
				<option value=" ">Dimana kamu tinggal....</option>
				<option value="jakarta">Jakarta</option>
				<option value="surabaya">Surabaya</option>
				<option value="bandung">Bandung</option>
				<option value="medan">Medan</option>
			</select>
			</div>
			<div class="bdn2">
			<input type="submit" name="submit" value="Sign Up">
			</div>
		</form>
	</div>
	<br>
	<?php
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! email dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
	<br>
	<footer>
		<h2>About Us</h2>
			<button class="gambar"><a href="https://web.facebook.com/aiceindonesia/"><img src="images/fb.png" alt="fb" width="30" height="30"></a></button>
			<button class="gambar"><a href="https://twitter.com/aiceindonesia"><img src="images/twit.png" alt="twit" width="30" height="30"></a></button>
			<button class="gambar"><a href="https://www.instagram.com/aiceindonesia/?hl=id"><img src="images/ig.png" alt="ig" width="30" height="30"></a></button>
			<button class="gambar"><a href="https://www.youtube.com/channel/UCmpXhMzd41rb7zulmJaMZiQ"><img src="images/yt.png" alt="yt" width="30" height="30"></a></button>
		<p>IcyShop Indonesia &#169; 2020<br>Dikembangkan Oleh<br>Kevin A; Fauzia H; Rafika R; Suci N.</p>
	</footer>
	</section>
</body>
</html>