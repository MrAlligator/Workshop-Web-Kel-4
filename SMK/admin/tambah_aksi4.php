<?php
include "koneksi.php";

$judul = $_POST['judul'];
$cuplikan = $_POST['cuplikan'];
$isi = $_POST['isi'];
$file = $_FILES['file']['name'];
$tmp = $_FILES['file']['tmp_name'];

$fotobaru = date('dmYHis').$file;

$lokasi = "/img/berita/".$fotobaru;

if(move_uploaded_file($tmp, $lokasi)){ // Cek apakah gambar berhasil diupload atau tidak
    // Proses simpan ke Database
    $query = "INSERT INTO tb_berita VALUES(' ', '".$judul."', '".$cuplikan."', '".$isi."', '".$fotobaru."')";
    $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
    if($sql){ // Cek jika proses simpan ke database sukses atau tidak
      // Jika Sukses, Lakukan :
      echo '<script type="text/javascript">alert("Data berhasil di Upload.");document.location.href="../admin/berita.php"</script>';
    }else{
      // Jika Gagal, Lakukan :
       echo '<script type="text/javascript">alert("Maaf Terjadi kesalahan saat upload.");document.location.href="../admin/berita.php"</script>';
    }
  }else{
    // Jika gambar gagal diupload, Lakukan :
    echo '<script type="text/javascript">alert("Maaf Gambar gagal di Upload.");</script>';
  }

  
?>