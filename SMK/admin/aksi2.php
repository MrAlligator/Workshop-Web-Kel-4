<?php
// Load file koneksi.php
include "koneksi.php";

// Ambil Data yang Dikirim dari Form
$nama_file = $_FILES['file']['name'];
$ukuran_file = $_FILES['file']['size'];
$tipe_file = $_FILES['file']['type'];
$tmp_file = $_FILES['file']['tmp_name'];

// Set path folder tempat menyimpan gambarnya
$path = "img/video/".$nama_file;
if($tipe_file == "video/mp4" || $tipe_file == "video/3gpp" || $tipe_file == "video/x-flv"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
  // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
  if($ukuran_file <= 50000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
    // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
    // Proses upload
    if(move_uploaded_file($tmp_file, $path)){ // Cek apakah gambar berhasil diupload atau tidak
      // Jika gambar berhasil diupload, Lakukan :	
	  // Proses simpan ke Database
	  $query = "INSERT INTO tb_video(nama_file,ukuran,tipe) VALUES('".$nama_file."','".$ukuran_file."','".$tipe_file."')";
      $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
      
      if($sql){ // Cek jika proses simpan ke database sukses atau tidak
        // Jika Sukses, Lakukan :
        echo '<script type="text/javascript">alert("Video Berhasil di Upload.");document.location.href="../admin/video2.php"</script>';
      }else {
        // Jika Gagal, Lakukan :
        echo '<script type="text/javascript">alert("Maaf Terjadi Kesalahan Saat Melakukan Upload.");document.location.href="../admin/video2.php"</script>';
      }
    }else{
      // Jika gambar gagal diupload, Lakukan :
      echo '<script type="text/javascript">alert("Maaf Video Gagal Diupload.");document.location.href="../admin/video2.php"</script>';
    }
  }else{
    // Jika ukuran file lebih dari 1MB, lakukan :
    echo '<script type="text/javascript">alert("Maaf Video yang di Upload Tidak Boleh Lebih dari 50 MB.");document.location.href="../admin/video2.php"</script>';
  }
}else{
  // Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
  echo '<script type="text/javascript">alert("Maaf, Tipe video yang diupload harus MP4 / 3GP / X-FLV.");document.location.href="../admin/video2.php"</script>';
}

?>