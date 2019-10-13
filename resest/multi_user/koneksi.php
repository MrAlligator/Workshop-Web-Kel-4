<?php 

$koneksi = mysqli_connect("127.0.0.1","root","","db_smk");

if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>