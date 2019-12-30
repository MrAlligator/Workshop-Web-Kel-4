<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$nis = $_POST['nis'];
$kelas = $_POST['kelas'];
$uh = $_POST['uh'];
$uts = $_POST['uts'];
$uas = $_POST['uas'];
$sikap = $_POST['sikap'];

// menginput data ke database
$ceknis = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM tb_nilai WHERE nis='$nis'"));
if($ceknis > 0){
    echo "<script>alert('Gagal Upload Nilai');document.location.href='../guru/inputnilai.php'</script>";
}else{
    mysqli_query($koneksi,"insert into tb_nilai values('','$nis','$nama','$kelas','$uh','$uts','$uas','$sikap')");
    echo "<script>alert('Nilai berhasil diupload');document.location.href='../guru/nilaisiswa.php'</script>";
}
?>