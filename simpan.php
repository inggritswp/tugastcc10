<?php

include("koneksi.php");

$nama_lengkap = $_GET['nama_lengkap'];
$kampus = $_GET['kampus'];
$jenis_kelamin = $_GET['jenis_kelamin'];
$alamat = $_GET['alamat'];
$no_telp= $_GET['no_telp'];

$exec=mysqli_query($koneksi,"INSERT INTO peserta (nama_lengkap,kampus,jenis_kelamin,alamat,no_telp) 
VALUES ('$nama_lengkap','$kampus','$jenis_kelamin','$alamat','$no_telp')");
if($exec==true){
	echo "<br><br><br><center><h1>Selamat Data Anda Berhasil Dikirim :)</h1></center>";
}else {
	echo "Data Salah";
}
mysqli_close($koneksi);
?>