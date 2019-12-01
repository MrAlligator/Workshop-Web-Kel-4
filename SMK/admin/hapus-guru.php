<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id_guru'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from tb_guru where id_guru='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:guru2.php");
 
?>