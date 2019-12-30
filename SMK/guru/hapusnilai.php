<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id_nilai'];
 
 
// menghapus data dari database
$pilih = mysqli_query($koneksi,"select * from tb_nilai where id_nilai='$id'");
$data = mysqli_fetch_array($pilih);
$nis = $data['nis'];
unlink($nis);
$hapus = mysqli_query($koneksi, "delete from tb_nilai where id_nilai='$id'");
if($hapus) { 
    echo '<script type="text/javascript">alert("Data Berhasil di Hapus.");document.location.href="../guru/nilaisiswa.php"</script>';
} else {
    echo '<script type="text/javascript">alert("Data Gagal di Hapus.");document.location.href="../guru/nilaisiswa.php"</script>';
}

?>