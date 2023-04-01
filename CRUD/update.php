<?php 
// koneksi database
include 'connect.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
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
 
// update data ke database
mysqli_query($koneksi,"update datamahasiswa set NRP='$NRP', Nama='$Nama', JenisKelamin='$JenisKelamin', Jurusan='$Jurusan', Hobi='$Hobi', EmailStudent='$EmailStudent', Alamat='$Alamat', NoHp='$NoHp', AsalSMA='$AsalSMA', MataKuliahFavorit='$MataKuliahFavorit' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>