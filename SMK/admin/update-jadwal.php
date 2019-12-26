<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$mapel = $_POST['nama_mapel'];
$smstr = $_POST['semester'];
$nama = $_POST['nama_guru'];
$drsi = $_POST['durasi'];
$hr = $_POST['hari'];



// update data ke database
mysqli_query($koneksi,"update tb_jadwal set nama_mapel='$mapel', semester='$smstr', nama_guru='$nama', durasi='$drsi', hari='$hr'");

// mengalihkan halaman kembali ke index.php
header("location:jadwal.php");

?>