<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id_foto'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from tb_foto where id_foto='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:photo.php");
 
?>