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

// menginput data ke database
mysqli_query($koneksi,"insert into db_karyawan values('','$nama','$nip','$jk','$agama','$tmptlahir','$tgllahir','$alamat','$telp','$nip')");

// mengalihkan halaman kembali ke index.php
header("location:karyawan2.php");

?>