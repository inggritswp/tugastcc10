<?php
include("koneksi.php");
?>

<html>
<head>
<title>Selamat Datang</title>
</head>
<body>	
	<center>
	<h1>Selamat Datang Peserta Pelatihan</h1>
	<h2>Silahkan isi form data diri berikut ini dengan lengkap</h2>
	<form action="simpan.php" target="_blank" method="get">
	  Nama Lengkap:<br>
	  <input type="text" name="nama_lengkap"><br>
	 <br> Asal Kampus:<br>
	  <input type="text" name="kampus">
	  <br><br>Jenis Kelamin<br>
	  <input type="radio" name="jenis_kelamin" value="Laki-laki" checked> Laki-laki<br>
	  <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan<br>
	 <br> Alamat<br>
	  <textarea name="alamat" rows="10" cols="30"></textarea>
	  <br>No Telp<br>
	  <input type="text" name="no_telp">
	  <br><br>
	  <input type="submit" value="Kirim">
	</form>
	</center>
</body>
</html>