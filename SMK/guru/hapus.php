<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id_siswa'];
 
 
// menghapus data dari database
$hapus = mysqli_query($koneksi, "delete from tb_siswa where id_siswa='$id'");
if($hapus) { 
    echo '<script type="text/javascript">alert("Data Berhasil di Hapus.");document.location.href="../guru/siswa2.php"</script>';
} else {
    echo '<script type="text/javascript">alert("Data Gagal di Hapus.");document.location.href="../guru/siswa2.php"</script>';
}

?>