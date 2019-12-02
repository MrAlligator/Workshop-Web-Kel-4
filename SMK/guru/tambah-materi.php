<?php
include "koneksi.php";

$tipe_file = $_FILES['nama_materi']['type'];
if ($tipe_file == "application/pdf")
{
$judul = trim($_POST['nama_materi']);
$sql = "INSERT INTO tb_materi (nama_materi) VALUES ('$judul')";
mysql_query($sql);

$query = mysql_query("SELECT id_materi FROM tb_materi ORDER BY id_materi DESC LIMIT 1");
$data = mysql_fetch_array($query);

$nama_baru = "file_".$data['id_materi'].".pdf";
$file_temp = $_FILES['nama_materi']['tmp_name'];
$folder = "guru/pdf";

move_uploaded_file($file_temp, "$folder/$nama_baru");
mysql_query("UPDATE tb_materi SET nama_materi='$nama_baru' WHERE id_materi='$data[id_materi]'");
header('location:uploadmateri.php?pesan=upload-berhasil');
} else
{
    echo "Gagal Upload. Materi bukan PDF!!! <a href='uploadmateri.php'> Kembali </a>";
}
?>