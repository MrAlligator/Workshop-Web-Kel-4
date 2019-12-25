<?php
session_start();
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
$status = $_POST['status'];
$cek      = mysqli_query($koneksi, "SELECT * FROM tb_guru WHERE username = '$username' AND password = '$password'");
$result   = mysqli_fetch_array($cek);
$cek2     = mysqli_query($koneksi, "SELECT * FROM tb_siswa WHERE username = '$username' AND password = '$password'");
$result2  = mysqli_fetch_array($cek2);
$cek3     = mysqli_query($koneksi, "SELECT * FROM tb_admin WHERE username = '$username' AND password = '$password'");
$result3  = mysqli_fetch_array($cek2);

if(mysqli_num_rows($cek3)==1 && $status=='admin'){
    $_SESSION['username'] = $result3['username'];
    $_SESSION['password'] = $result3['password'];
    $_SESSION['level']    = 'admin';
    header('location:admin/index.php');
}
elseif(mysqli_num_rows($cek)==1 && $status =='guru'){
    $_SESSION['password'] = $result['password'];
    $_SESSION['nama'] = $result['nama_guru'];
    $_SESSION['username'] = $result['username'];
    $_SESSION['level']    = 'guru';
    header('location:guru/index.php');
}
elseif(mysqli_num_rows($cek2)==1){
    $_SESSION['username'] = $result2['username'];
    $_SESSION['password'] = $result2['password'];
    $_SESSION['level']    = 'siswa';
    header('location:siswa/index.php');
} else{
    echo "<script>alert('Maaf Hak Akses Salah');location='login.php';</script>";
    
    
}
?>