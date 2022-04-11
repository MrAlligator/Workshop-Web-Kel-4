<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$nis = $_POST['nis'];
$kelas = $_POST['kelas'];
$mapel = $_POST['mapel'];
$uh = $_POST['nilai_ulgn_harian'];
$uts = $_POST['nilai_uts'];
$uas = $_POST['nilai_uas'];
$sikap = $_POST['nilai_sikap'];

// menginput data ke database
$ceknis = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE mapel='$mapel'"));
if($ceknis > 0){
    echo "<script>alert('Gagal Upload Nilai');document.location.href='../guru/inputnilai.php'</script>";
}else{
    mysqli_query($koneksi,"insert into tb_nilai values('','$nis','$nama','$kelas','$mapel','$uh','$uts','$uas','$sikap')");
    echo "<script>alert('Nilai berhasil diupload');document.location.href='../guru/nilaisiswa.php'</script>";
}
