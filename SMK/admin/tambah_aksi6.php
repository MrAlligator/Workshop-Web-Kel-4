<?php
// Load file koneksi.php
include "koneksi.php";
// Ambil Data yang Dikirim dari Form
$nama = addslashes($_POST['nama']);
$nip = addslashes($_POST['nip']);
$kelas = addslashes($_POST['kelas']);
$status = addslashes($_POST['jabatan']);

$ceknis = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM tb_walikelas WHERE nip='$nip'"));

if($ceknis > 0){
    echo "<script>alert('NIP Sudah Digunakan');document.location.href='../admin/walikelas.php'</script>";
}else {
    mysqli_query($koneksi,"insert into tb_walikelas values('','$nip','$nama','$kelas','$nip','$nip','$status')");
    echo "<script>alert('Data Berhasil di Simpan');document.location.href='../admin/walikelas.php'</script>";
}
?>