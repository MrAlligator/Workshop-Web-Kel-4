<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id_video'];
 
 
// menghapus data dari database
$pilih = mysqli_query($koneksi,"select * from tb_video where id_video='$id'");
$data = mysqli_fetch_array($pilih);
$video = $data['nama_file'];
unlink("img/video/".$video);
$hapus = mysqli_query($koneksi, "delete from tb_video where id_video='$id'");
if($hapus) { 
    echo '<script type="text/javascript">alert("Data Berhasil di Hapus.");document.location.href="../admin/video2.php"</script>';
} else {
    echo '<script type="text/javascript">alert("Data Gagal di Hapus.");document.location.href="../admin/video2.php"</script>';
}

?>