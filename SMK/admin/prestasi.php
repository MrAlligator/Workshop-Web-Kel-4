<?php
include 'koneksi.php';
$judul_prestasi = $_POST['judul_prestasi'];
$isi_prestasi = $_POST['isi_materi'];
$tanggal_prestasi = $_POST['tanggal_prestasi'];
 $targetfolder = "img/berita";
 $targetfolder = $targetfolder . basename( $_FILES['file']['name']) ;
$b=$_FILES['file']['name'];
$file_type=$_FILES['file']['type'];
if ($file_type=="png/jpg") {
 if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))

 {
$query = mysqli_query($koneksi,"INSERT INTO tb_materi VALUES('','$judul_prestasi','$isi_prestasi','$tanggal_prestasi', '$b')");
 echo "<script>alert('File $b  berhasil di Upload!');location='tambah-materi.php';</script>";
 //Jalankan perintah insert ke database
 }
 else {
 echo "<script>alert('File $b  Gagal di Upload!');location='inputmateri.php';</script>";
 }
}
else {
 echo "<script>alert('Hanya Boleh upload PDF');location='inputmateri.php';</script>";
}
?>