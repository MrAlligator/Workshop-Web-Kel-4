<?php
// Load file koneksi.php
include "koneksi.php";
// Ambil Data yang Dikirim dari Form
$judul = $_POST['judul'];
$cuplikan = $_POST['cuplikan'];
$isi = $_POST['isi'];
$foto = $_FILES['file']['name'];
$tmp = $_FILES['file']['tmp_name'];
  
// Rename nama fotonya dengan menambahkan tanggal dan jam upload
$fotobaru = date('dmYHis').$foto;
// Set path folder tempat menyimpan fotonya
$path = "img/berita/".$fotobaru;
// Proses upload
if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
  // Proses simpan ke Database
  $query = "INSERT INTO tb_berita VALUES('', '".$judul."', '".$cuplikan."', '".$isi."', '".$fotobaru."')";
  $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    echo "<script>alert('Data Berhasil disimpan.');document.location.href='../admin/berita2.php'</script>";
  }else{
    // Jika Gagal, Lakukan :
    echo "<script>alert('Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.');document.location.href='../admin/tambah-berita.php'</script>";
  }
}else{
  // Jika gambar gagal diupload, Lakukan :
  echo "<script>alert('Maaf, Gambar gagal untuk diupload.');document.location.href='../admin/tambah-berita.php'</script>";
}
?>