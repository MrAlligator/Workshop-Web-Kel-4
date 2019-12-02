<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id_siswa'];
$nama = $_POST['nama_siswa'];
$nis = $_POST['nis'];
$alamat = $_POST['alamat_siswa'];
$jk = $_POST['jk_siswa'];
$agama = $_POST['agama_siswa'];
$tmptlahir = $_POST['tmptlhr_siswa'];
$tgllahir = $_POST['tgllhr_siswa'];
$telp = $_POST['telp_siswa'];

// update data ke database
mysqli_query($koneksi,"update tb_siswa set nama='$nama', nis='$nis', jk='$jk', agama='$agama', tmptlahir='$tmptlahir', tgllahir='$tgllahir', alamat='$alamat', telp='$telp' where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:siswa.php");

?>