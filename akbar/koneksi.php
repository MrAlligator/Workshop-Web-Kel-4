<?php
$koneksi =  mysqli_connect("localhost","root","");
mysql_select_db("db_una");
//mengecek koneksi
if($koneksi -> connect_error){
    die ("koneksi gagal : " .$koneksi -> connect_error);
}
else "koneksi berhasil";
?>