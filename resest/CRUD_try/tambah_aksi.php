<?php 

include 'koneksi.php';

$nama = $_POST['nama'];
$nis = $_POST['nis'];
$jk = $_POST['jk'];
$agama = $_POST['agama'];
$tmptlahir = $_POST['tmptlahir'];
$tgllahir = $_POST['tgllahir'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];

mysqli_query($koneksi,"insert into tb_siswa values('','$nama','$nis','$jk','$agama','$tmptlahir','$tgllahir','$alamat','$telp')");

header("location:index.php");
?>