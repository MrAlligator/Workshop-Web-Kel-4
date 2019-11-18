<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nama_guru = $_POST['nama'];
$nip = $_POST['nip'];
$alamat_guru = $_POST['alamat'];
$jk_guru = $_POST['jk'];
$agama_guru = $_POST['agama'];
$tmptlahir_guru = $_POST['tempat'];
$tgllahir_guru = $_POST['tanggal'];
$telp_guru = $_POST['telepon'];

// menginput data ke database
mysqli_query($koneksi,"insert into tb_guru values('','$nama_guru','$nip_guru','$jk_guru','$agama_guru','$tmptlahir_guru','$tgllahir_guru','$alamat_guru','$telp_guru')");

// mengalihkan halaman kembali ke index.php
header("location:guru.php");

?>