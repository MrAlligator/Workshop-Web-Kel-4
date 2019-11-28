<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$nis = $_POST['nip'];
$alamat = $_POST['alamat'];
$jk = $_POST['jk'];
$agama = $_POST['agama'];
$tmptlahir = $_POST['tempat'];
$tgllahir = $_POST['tanggal'];
$telp = $_POST['telepon'];

// update data ke database
mysqli_query($koneksi,"update db_karyawan set nama_karyawan='$nama', nip='$nip', jk_karyawan='$jk', agama_karyawan='$agama', tmptlahir_karyawan='$tmptlahir', tgllahir_karyawan='$tgllahir', alamat_karyawan='$alamat', telp_karyawan='$telp' where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:karyawan.php");

?>