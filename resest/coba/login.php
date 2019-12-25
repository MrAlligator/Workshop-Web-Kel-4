<?php 
session_start();
	
	require_once("koneksi.php");
	
	$username = $_POST['username'];
	$password = $_POST['password'];
 
	$cekuser = mysqli_query($koneksi, "SELECT * FROM tb_pengguna WHERE username = '$username'");
	$jumlah = mysqli_num_rows($cekuser);
	$hasil = mysqli_fetch_array($cekuser);
 
	
	if($jumlah == 0) {
		echo "<script>alert('Email belum terdaftar!'); window.location = 'index.php'</script>";
	} else {
		if($password > $hasil['password']) {
		echo "<script>alert('Password Salah!'); window.location = 'index.php'</script>";
		} else {
		session_start();
		$_SESSION['username'] = $_POST['username'];
		$_SESSION['password'] = $_POST['password'];
	
 
		header('location:index.php');
		}
	}
?>