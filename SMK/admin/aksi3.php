<?php
include "koneksi.php";

$date = date("Y-m-d");
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$nis = $_POST['nis'];
$ket = $_POST['hadir'];

$ceknis = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM tb_absen WHERE nisabsen_siswa='$nis' AND tgl_absen='$date'"));
if ($ceknis > 0) {
    echo "<script>alert('Siswa Sudah Absen Hari Ini');document.location.href='../admin/absensi.php'</script>";
} else {
    mysqli_query($koneksi, "insert into tb_absen values('','$nama','$nis','$kelas','$ket','$date')");
    echo "<script>alert('Data berhasil diupload');document.location.href='../admin/absensi.php'</script>";
}
?>
?>