<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id_guru'];
 
 
// menghapus data dari database
$pilih = mysqli_query($koneksi,"select * from tb_guru where id_guru='$id'");
$data = mysqli_fetch_array($pilih);
$foto = $data['foto_guru'];
unlink($foto);
$hapus = mysqli_query($koneksi, "delete from tb_guru where id_guru='$id'");
if($hapus) { 
    echo '<script type="text/javascript">alert("Data Berhasil di Hapus.");document.location.href="../admin/karyawan2.php"</script>';
} else {
    echo '<script type="text/javascript">alert("Data Gagal di Hapus.");document.location.href="../admin/karyawan2.php"</script>';
}

?>