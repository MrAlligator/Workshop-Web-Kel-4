<?php 
// koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$id = $_GET['id_berita'];

// menghapus data dari database
$pilih = mysqli_query($koneksi,"select * from tb_berita where id_berita='$id'");
$data = mysqli_fetch_array($pilih);
$video = $data['foto'];
unlink("img/berita/".$video);
$hapus = mysqli_query($koneksi, "delete from tb_berita where id_berita='$id'");
if($hapus) { 
    echo '<script type="text/javascript">alert("Data Berhasil di Hapus.");document.location.href="../admin/berita2.php"</script>';
} else {
    echo '<script type="text/javascript">alert("Data Gagal di Hapus.");document.location.href="../admin/berita2.php"</script>';
}

?>