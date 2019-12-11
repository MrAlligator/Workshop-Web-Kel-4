<?php
include 'koneksi.php';
$no_daftar = $_POST['no_daftar'];
$nama_lengkap = $_POST['nama_lengkap'];
$tmptlahir = $_POST['tmptlahir'];
$tgllahir = $_POST['tgllahir'];
$jk = $_POST['jk'];
$agama = $_POST['agama'];
$anak_ke = $_POST['anak_ke'];
$status_dlm_keluarga = $_POST['status_dlm_keluarga'];
$alamat_siswa = $_POST['alamat_siswa'];
$telp_siswa = $_POST['telp_siswa'];
$sekolah_asal = $_POST['sekolah_asal'];
$alamat_sekolah = $_POST['alamat_sekolah'];
$tahun_lulus = $_POST['tahun_lulus'];
$total_nilai_un = $_POST['total_nilai_un'];
$nama_ayah = $_POST['nama_ayah'];
$nama_ibu = $_POST['nama_ibu'];
$alamat_ortu = $_POST['alamat_ortu'];
$telp_ortu = $_POST['telp_ortu'];
$perkerjaan_ayah = $_POST['perkerjaan_ayah'];
$pekerjaan_ibu = $_POST['pekerjaan_ibu'];
$nama_wali = $_POST['nama_wali'];
$alamat_wali = $_POST['alamat_wali'];
$query = mysqli_query($koneksi,"INSERT INTO tb_calon_siswa VALUES('','$no_daftar','$nama_lengkap','$tmptlahir', '$tgllahir','$jk','$agama','$anak_ke','$status_dlm_keluarga','$alamat_siswa','$telp_siswa','$sekolah_asal','$alamat_sekolah','$tahun_lulus','$total_nilai_un','$nama_ayah','$nama_ibu','$alamat_ortu','$telp_ortu','$perkerjaan_ayah','$pekerjaan_ibu','$nama_wali','$alamat_wali')");
if ($query){
	echo "<script>alert('Berhasil Tersimpan!');location='tampilcalonsiswa.php';</script>";
}else{
	echo "gagal";
}
?>