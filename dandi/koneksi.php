<?php
$koneksi =  mysqli_connect("localhost","root","");
mysql_select_db("db_sis");

if($koneksi -> connect_error){
    die ("koneksi error : " .$koneksi -> connect_error);
}
else "koneksi sukses";
?>