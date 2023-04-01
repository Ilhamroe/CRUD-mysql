<?php 
// koneksi database
include 'connect.php';
 
// menangkap data yang di kirim dari form
$NRP = $_POST['NRP'];
$Nama = $_POST['Nama'];
$JenisKelamin = $_POST['JenisKelamin'];
$Jurusan = $_POST['Jurusan'];
$Hobi = $_POST['Hobi'];
$EmailStudent = $_POST['EmailStudent'];
$Alamat = $_POST['Alamat'];
$NoHp = $_POST['NoHp'];
$AsalSMA = $_POST['AsalSMA'];
$MataKuliahFavorit = $_POST['MataKuliahFavorit'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into datamahasiswa values('','$NRP','$Nama','$JenisKelamin','$Jurusan','$Hobi','$EmailStudent','$Alamat','$NoHp','$AsalSMA','$MataKuliahFavorit')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>