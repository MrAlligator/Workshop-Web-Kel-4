<?php
include 'koneksi.php';
$username = $_POST['nama_guru'];
$password = $_POST['password'];
$cek      = mysqli_query($koneksi, "SELECT * FROM tb_guru WHERE nama_guru = '$username' AND password = '$password'");
$result   = mysqli_num_rows($cek);
$data = mysqli_fetch_array($cek);
 
if($result>0){
    if ($data['status'] == 'karyawan') {
        session_start();
        $_SESSION['nama_guru'] = $data['nama_guru'];
        $_SESSION['status']    = $data['status'];
        echo "<script>alert('Selamat Datang, Admin.');document.location.href='../SMK/admin/index.php'</script>";
 
    }elseif($data['status'] == 'guru'){
        session_start();
        $_SESSION['nama_guru'] = $data['nama_guru'];
        $_SESSION['status']    = $data['status'];
        echo "<script>alert('Selamat Datang, Guru.');document.location.href='../SMK/guru/index.php'</script>";
    }elseif($data['level'] == 'siswa'){
        session_start();
        $_SESSION['username'] = $data['username'];
        $_SESSION['level']    = $data['level'];
        echo "<script>alert('Selamat Datang, Siswa.');document.location.href='../SMK/siswa/index.php'</script>";
    }
    }else{
    echo "<script>alert('Username atau Password salah!!!');document.location.href='../SMK/login.php'</script>";
}
?>