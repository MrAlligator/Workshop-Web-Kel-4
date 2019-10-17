<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$nis = $_POST['nis'];
$jenisKelamin = $_POST['jk_siswa'];
$agama = $_POST['agama_siswa'];
$tmptlahir = $_POST['tmptlahir_siswa'];
$tanggal = $_POST['tgllahir_siswa'];
$alamat = $_POST['alamat_siswa'];
$notelp = $_POST['telp_siswa'];
$passwd = $_POST['password'];

// update data ke database
mysqli_query($koneksi,"update tb_siswa set nama_siswa='$nama', nis='$nis', jk_siswa='$jenisKelamin', agama_siswa='$agama', tmptlahir_siswa='$tmptlahir', tgllahir_siswa='$tanggal', alamat_siswa='$alamat' telp_siswa='$notelp', password='$passwd', where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:crud.php");

?>