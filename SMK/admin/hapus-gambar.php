<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id_foto'];
 
 
// menghapus data dari database
$pilih = mysqli_query($koneksi,"select * from tb_foto where id_foto='$id'");
$data = mysqli_fetch_array($pilih);
$foto = $data['nama_file'];
unlink("img/gallery/".$foto);
$hapus = mysqli_query($koneksi, "delete from tb_foto where id_foto='$id'");
if($hapus) { 
    echo '<script type="text/javascript">alert("Data Berhasil di Hapus.");document.location.href="../admin/photo.php"</script>';
} else {
    echo '<script type="text/javascript">alert("Data Gagal di Hapus.");document.location.href="../admin/photo.php"</script>';
}

?>