<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$nis = $_POST['nis'];
$alamat = $_POST['alamat'];
$jk = $_POST['jk'];
$agama = $_POST['agama'];
$tmptlahir = $_POST['tempat'];
$tgllahir = $_POST['tanggal'];
$telp = $_POST['telepon'];

// update data ke database
mysqli_query($koneksi,"update tb_siswa set nama='$nama', nis='$nis', jk='$jk', agama='$agama', tmptlahir='$tmptlahir', tgllahir='$tgllahir', alamat='$alamat', telp='$telp' where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:siswa2.php");

?>