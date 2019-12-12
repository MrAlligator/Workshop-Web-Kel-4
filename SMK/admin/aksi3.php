<?php
    include "koneksi.php";

    $date = date("Y-m-d");
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $nis = $_POST['nis'];
    $ket = $_POST['hadir'];

    mysqli_query($koneksi,"INSERT into tb_absen values('','$nama','$nis','$kelas','$ket','$date')");
    echo "<script>alert('Data berhasil diupload');document.location.href='../admin/absensi.php'</script>";
?>