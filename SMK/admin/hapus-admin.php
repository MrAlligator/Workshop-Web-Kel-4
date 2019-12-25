<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id_admin'];
 
 
// menghapus data dari database
$hapus = mysqli_query($koneksi, "delete from tb_admin where id_admin='$id'");
if($hapus) { 
    echo '<script type="text/javascript">alert("Data Berhasil di Hapus.");document.location.href="../admin/tampil_admin.php"</script>';
} else {
    echo '<script type="text/javascript">alert("Data Gagal di Hapus.");document.location.href="../admin/guru2.php"</script>';
}

?>