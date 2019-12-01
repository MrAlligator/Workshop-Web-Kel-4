<?php 
include 'koneksi.php';
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
    $query = "INSERT INTO tb_pengumuman VALUES(NULL, '".$judul."', '".$cuplikan."', '".$isi."', '".$fotobaru."')";
    $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query
    if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
        header("location: pengumuman.php"); // Redirect ke halaman index.php
    }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='tambah-berita.php'>Kembali Ke Form</a>";
    }
}else{
  // Jika gambar gagal diupload, Lakukan :
    echo "Maaf, Gambar gagal untuk diupload.";
    echo "<br><a href='tambah-berita.php'>Kembali Ke Form</a>";
}
?>