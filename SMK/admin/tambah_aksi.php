<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$nis = $_POST['nis'];
$alamat = $_POST['alamat'];
$jk = $_POST['jk'];
$agama = $_POST['agama'];
$tmptlahir = $_POST['tempat'];
$tgllahir = $_POST['tanggal'];
$telp = $_POST['telepon'];

// menginput data ke database
mysqli_query($koneksi,"insert into tb_siswa values('','$nama','$nis','$jk','$agama','$tmptlahir','$tgllahir','$alamat','$telp')");

// mengalihkan halaman kembali ke index.php
header("location:siswa2.php");

?>