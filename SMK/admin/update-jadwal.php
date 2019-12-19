<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$mapel = $_POST['nama_mapel'];
$nama = $_POST['nama_guru'];
$smstr = $_POST['semester'];


// update data ke database
mysqli_query($koneksi,"update tb_jadwal set nama_mapel='$mapel', nama_guru='$nama', semester='$smstr'");

// mengalihkan halaman kembali ke index.php
header("location:jadwal.php");

?>