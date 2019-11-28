<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$nip = $_POST['nip'];
$alamat = $_POST['alamat'];
$jk = $_POST['jk'];
$agama = $_POST['agama'];
$tmptlahir = $_POST['tempat'];
$tgllahir = $_POST['tanggal'];
$telp = $_POST['telepon'];
$status = $_POST['jabatan'];
$pass = $_POST['pass'];
// menginput data ke database
mysqli_query($koneksi,"insert into tb_guru values('','$nip','$nama','$jk','$tmptlahir','$tgllahir','$agama','$alamat','$telp','$status','$pass')");

// mengalihkan halaman kembali ke index.php
header("location:guru.php");

?>