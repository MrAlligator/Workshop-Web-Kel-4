<?php 
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$nis = $_POST['nis'];
$jk = $_POST['jk'];
$agama = $_POST['agama'];
$tmptlahir = $_POST['tmptlahir'];
$tgllahir = $_POST['tgllahir'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];

mysqli_query($koneksi,"update tb_siswa set nama='$nama', nis='$nis', jk='$jk', agama='$agama', tmptlahir='$tmptlahir', tgllahir='$tgllahir', alamat='$alamat', telp='$telp' where id='$id'");

header("location:index.php");

?>