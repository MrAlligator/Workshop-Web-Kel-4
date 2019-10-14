<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$nis = $_POST['nis'];
$jenisKelamin = $_POST['jenisKelamin'];
$agama = $_POST['agama'];
$tmptlahir = $_POST['tmptlahir'];
$tanggal = $_POST['tanggal'];
$alamat = $_POST['alamat'];
$notelp = $_POST['notelp'];
$passwd = $_POST['passwd'];

// update data ke database
mysqli_query($koneksi,"update tb_siswa set nama='$nama', nis='$nis', jenisKelamin='$jenisKelamin', agama='$agama', tmptlahir='$tmptlahir', tanggal='$tanggal', alamat='$alamat' notelp='$notelp', passwd='$passwd', where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:crud.php");

?>