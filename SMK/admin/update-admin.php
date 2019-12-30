<?php 
ini_set("display_errors", "off");
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$nip = $_POST['nip'];
$alamat = $_POST['alamat'];
$jk = $_POST['jk'];
$agama = $_POST['agama'];
$tmptlahir = $_POST['tempat'];
$tgllahir = $_POST['tanggal'];
$telp = $_POST['telepon'];
$pass = $_POST['pass'];
$status = $_POST['jabatan'];
$status2 = $_POST['status2'];

    mysqli_query($koneksi,"update tb_guru set nip='$nip',nama_guru='$nama',jk_guru='$jk',tmptlahir='$tmptlahir',tgllahir='$tgllahir',agama_guru='$agama',alamat_guru='$alamat',telp_guru='$telp',status='$status',password='$pass' where nip ='$id'");
    echo "<script>alert('Data Berhasil di Ubah');document.location.href='../admin/guru2.php'</script>";

?>