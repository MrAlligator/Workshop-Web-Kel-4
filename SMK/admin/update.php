<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$nis = $_POST['nip'];
$alamat = $_POST['alamat'];
$jk = $_POST['jk'];
$agama = $_POST['agama'];
$tmptlahir = $_POST['tempat'];
$tgllahir = $_POST['tanggal'];
$telp = $_POST['telepon'];
$pass = $_POST['pass'];
$kelas = $_POST['kelas'];

mysqli_query($koneksi,"update tb_siswa set nama_siswa='$nama', nis='$nis', kelas='$kelas', jk_siswa='$jk', agama_siswa='$agama', tmptlhr_siswa='$tmptlahir', tgllhr_siswa='$tgllahir', alamat_siswa='$alamat', telp_siswa='$telp', password='$pass' where id_siswa='$id'");
echo "<script>alert('Data Berhasil di Ubah');document.location.href='../admin/siswa2.php'</script>";
?>