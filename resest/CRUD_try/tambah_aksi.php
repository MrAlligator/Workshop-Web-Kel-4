<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$nis = $_POST['nis'];
$jk = $_POST['jk'];
$agama = $_POST['agama'];
$tmptlahir = $_POST['tmptlahir'];
$tgllahir = $_POST['tgllahir'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];

// menginput data ke database
mysqli_query($koneksi,"insert into tb_siswa values('','$nama','$nis','$jk','$agama','$tmptlahir','$tgllahir','$alamat','$telp')");

// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>