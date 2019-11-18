<?php
session_start();
include 'koneksi.php';
if( isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

$login = mysqli_query($koneksi, "SELECT * FROM tb_userlevel WHERE username = '$username' AND password = '$password'");
$cek =  mysqli_num_rows($login);

if($cek > 0){ 
    mysqli_query($koneksi, "SELECT * FROM tb_userlevel WHERE password = '$password' AND username = '$username'");
    $data = mysqli_fetch_assoc($login);
    
    if($data['level']=="admin"){
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['level']="admin";
        echo "<script>
            window.location= 'http://localhost/Workshop-Web-Kel-4/SMK/admin/index.php';
        </script>";
	}
	else if($data['level']=="siswa"){
		$_SESSION['username'] = $_POST['username'];
		$_SESSION['level']="siswa";
        header("admin/siswa.php");
	}
	else if($data['level']=="guru"){
		$_SESSION['username'] = $_POST['username'];
		$_SESSION['level']="guru";
        header("admin/guru.php");
	}
	else{
		header("index.php");
        }

    }
}
?>