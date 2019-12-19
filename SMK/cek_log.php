<?php
session_start();
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
$cek      = mysqli_query($koneksi, "SELECT * FROM tb_guru WHERE username = '$username' AND password = '$password'");
$result   = mysqli_fetch_array($cek);
$cek2     = mysqli_query($koneksi, "SELECT * FROM tb_siswa WHERE username = '$username' AND password = '$password'");
$result2  = mysqli_fetch_array($cek2);

if(mysqli_num_rows($cek)==1){
    $_SESSION['username'] = $result['username'];
    $_SESSION['password'] = $result['password'];
    $_SESSION['nama'] = $result['nama_guru'];
    $_SESSION['level']    = 'guru';
    header('location:guru/index.php');
}
elseif(mysqli_num_rows($cek2)==1){
    $_SESSION['username'] = $result2['username'];
    $_SESSION['password'] = $result2['password'];
    $_SESSION['level']    = 'siswa';
    header('location:siswa/index.php');
} else{
    echo "Login GAGAL";
}
?>