<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id_nilai'];
 
 
// menghapus data dari database
mysqli_query($koneksi, "delete from tb_nilai where id_nilai='$id'");
echo "<script>alert('Data Berhasil dihaopus');document.location.href='../guru/nilaisiswa.php'</script>";
?>