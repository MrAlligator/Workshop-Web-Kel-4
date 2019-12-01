<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$nis = $_POST['nip'];
$alamat = $_POST['alamat'];
$jk = $_POST['jk'];
$agama = $_POST['agama'];
$tmptlahir = $_POST['tempat'];
$tgllahir = $_POST['tanggal'];
$telp = $_POST['telepon'];
$pass = $_POST['pass'];

// menginput data ke database
mysqli_query($koneksi,"insert into tb_siswa values('','$nis','$nama','$jk','$agama','$tmptlahir','$tgllahir','$alamat','$telp','$nis')");

// mengalihkan halaman kembali ke index.php
header("location:siswa2.php");

?>