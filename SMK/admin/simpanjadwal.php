<?php
include 'koneksi.php';
$nama_mapel = $_POST['nama_mapel'];
$semester = $_POST['semester'];
$nama_guru = $_POST['nama_guru'];
$durasi = $_POST['durasi'];
$hari = $_POST['hari'];


if($nama_mapel=="" || $semester=="" || $nama_guru=="" || $durasi=="" || $hari==""){
	echo "<script>alert('data tidak lengkap!');location='tambah-jadwal.php';</script>";
}else{
$query = mysqli_query($koneksi,"INSERT INTO tb_jadwal VALUES('','$nama_mapel','$semester','$nama_guru', '$durasi','$hari')");
if ($query){
	echo "<script>alert('Berhasil Tersimpan!');location='jadwal.php';</script>";
}else{
	echo "gagal";
}
}
?>