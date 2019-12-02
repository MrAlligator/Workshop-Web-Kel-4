<?php 
// koneksi database
include 'koneksi.php';
if(isset($_POST['simpan']))
// menangkap data yang di kirim dari form
$nama = $_POST['nama_siswa'];
$nis = $_POST['nis'];
$alamat = $_POST['alamat'];
$jk = $_POST['jk_siswa'];
$agama = $_POST['agama_siswa'];
$tmptlahir = $_POST['tmptlhr_siswa'];
$tgllahir = $_POST['tgllhr_siswa'];
$telp = $_POST['telp_siswa'];

// menginput data ke database
mysqli_query($koneksi,"INSERT INTO tb_siswa VALUES('','$nama','$nis','$jk','$agama','$tmptlahir','$tgllahir','$alamat','$telp')");

// mengalihkan halaman kembali ke index.php
header("location:siswa2.php");

?>