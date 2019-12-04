<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$nis = $_POST['nip'];
$alamat = $_POST['alamat'];
$jk = $_POST['jk'];
$agama = $_POST['agama'];
$tmptlahir = $_POST['tempat'];
$tgllahir = $_POST['tanggal'];
$telp = $_POST['telepon'];
$status = $_POST['jabatan'];
$kelas = $_POST['kelas'];

// menginput data ke database
$ceknis = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM tb_siswa WHERE nis='$nis'"));
if($ceknis > 0){
    echo "<script>alert('NIS Sudah Digunakan');document.location.href='../admin/tambah.php'</script>";
}else{
    mysqli_query($koneksi,"insert into tb_siswa values('','$nis','$nama','$kelas','$jk','$agama','$tmptlahir','$tgllahir','$alamat','$telp','$status','$nis')");
    echo "<script>alert('Data berhasil diupload');document.location.href='../admin/siswa2.php'</script>";
}
?>