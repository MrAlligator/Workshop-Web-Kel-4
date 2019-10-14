<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$nis = $_POST['nis'];
$jenisKelamin = $_POST['jenisKelamin'];
$agama = $_POST['agama'];
$tmptlahir = $_POST['tmptlahir'];
$tanggal = $_POST['tanggal'];
$alamat = $_POST['alamat'];
$notelp = $_POST['notelp'];
$passwd = $_POST['passwd'];

// menginput data ke database
mysqli_query($koneksi,"insert into tb_siswa values('','$nama','$nis','$jenisKelamin','$agama','$tmptlahir','$tanggal','$alamat','$notelp','$passwd')");

// mengalihkan halaman kembali ke index.php
header("location:crud.php");

?>