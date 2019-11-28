<?php
$server   = "localhost";
$username = "root";
$password = "password";
$database = "db_universitas";

$koneksi = mysql_connect($server,$username,$password) or die ('Koneksi gagal');

if($koneksi){
	mysql_select_db($database) or die ('Database belum dibuat');	
}

?>