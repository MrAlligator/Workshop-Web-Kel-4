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
$namafolder="img/siswa/"; //folder tempat menyimpan file

if (!empty($_FILES["file"]["tmp_name"])) {
    $jenis_gambar=$_FILES['file']['type'];
    if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")
    {           
        $gambar = $namafolder . basename($_FILES['file']['name']);       
        if (move_uploaded_file($_FILES['file']['tmp_name'], $gambar)) {
// update data ke database
mysqli_query($koneksi,"update tb_siswa set nama_siswa='$nama', nis='$nis', kelas='$kelas', jk_siswa='$jk', agama_siswa='$agama', tmptlhr_siswa='$tmptlahir', tgllhr_siswa='$tgllahir', alamat_siswa='$alamat', telp_siswa='$telp',foto_siswa='$gambar', password='$pass' where id_siswa='$id'");
        }
        ?>
        <script language="javascript">
            alert('Berhasil Mengubah data');
            document.location="siswa2.php";
        </script>
       <?php
} else {
     ?>
        <script language="javascript">
            alert('Gagal Mengubah data');
            document.location="siswa2.php";
        </script>
       <?php
}
} else {
?>
    <script language="javascript">
        alert('Gambar harus berformat .jpg .png .gif');
        document.location="edit.php";
    </script>
   <?php
}
?>
