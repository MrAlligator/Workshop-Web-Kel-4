<?php 
// isi nama host, username mysql, dan password mysql anda
$host = mysql_connect("127.0.0.1","root"," ");
 
if($host){
	echo "koneksi host berhasil.<br/>";
}else{
	echo "koneksi gagal.<br/>";
}
// isikan dengan nama database yang akan di hubungkan
$db = mysql_select_db("db_smk");
 
if($db){
	echo "koneksi database berhasil.";
}else{
	echo "koneksi database gagal.";
}
?>