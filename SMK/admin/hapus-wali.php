<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id_walikelas'];
 
 
// menghapus data dari database
$hapus = mysqli_query($koneksi, "delete from tb_walikelas where id_walikelas='$id'");
if($hapus) { 
    echo '<script type="text/javascript">alert("Data Berhasil di Hapus.");document.location.href="../admin/walikelas.php"</script>';
} else {
    echo '<script type="text/javascript">alert("Data Gagal di Hapus.");document.location.href="../admin/walikelas.php"</script>';
}

?>