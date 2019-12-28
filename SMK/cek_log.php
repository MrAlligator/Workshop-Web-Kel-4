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
$result3  = mysqli_fetch_array($cek3);

if(mysqli_num_rows($cek3)==1 && $status=='admin'){
    $_SESSION['username'] = $result3['username'];
    $_SESSION['password'] = $result3['password'];
    $_SESSION['level']    = 'admin';
    $_SESSION['name'] = $result3['nama_admin'];
    $_SESSION['foto'] = $result3['foto_admin'];
    $_SESSION['nip'] = $result3['nip_admin'];
    $_SESSION['alamat'] = $result3['alamat_admin'];
    $_SESSION['jk'] = $result3['jk_admin'];
    $_SESSION['tmpt'] = $result3['tmpt_admin'];
    $_SESSION['tgl'] = $result3['tgl_admin'];
    $_SESSION['agama'] = $result3['agama_admin'];
    $_SESSION['telp'] = $result3['telp_admin'];
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
    $_SESSION['name'] = $result2['nama_siswa'];
    $_SESSION['foto'] = $result2['foto_siswa'];
    $_SESSION['nip'] = $result2['nis'];
    $_SESSION['alamat'] = $result2['alamat_siswa'];
    $_SESSION['jk'] = $result2['jk_siswa'];
    $_SESSION['tmpt'] = $result2['tmptlhr_siswa'];
    $_SESSION['tgl'] = $result2['tgllhr_siswa'];
    $_SESSION['agama'] = $result2['agama_siswa'];
    $_SESSION['telp'] = $result2['telp_siswa'];
    header('location:siswa/index.php');
} else{
    echo "<script>alert('Maaf Hak Akses Salah');location='login.php';</script>";
    
    
}
?>