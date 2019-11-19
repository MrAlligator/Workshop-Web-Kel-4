<?php
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
$cek      = mysqli_query($koneksi, "SELECT * FROM tb_userlevel WHERE username = '$username' AND password = '$password'");
$result   = mysqli_num_rows($cek);
$data = mysqli_fetch_array($cek);
 
if($result>0){
    if ($data['level'] == 'admin') {
        session_start();
        $_SESSION['username'] = $data['username'];
        $_SESSION['level']    = $data['level'];
        echo "<script>alert('Selamat Datang, Admin.');document.location.href='../SMK/admin/index.php'</script>";
 
    }elseif($data['level'] == 'guru'){
        session_start();
        $_SESSION['username'] = $data['username'];
        $_SESSION['level']    = $data['level'];
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