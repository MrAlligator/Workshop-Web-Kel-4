<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nama = addslashes($_POST['nama']);
$nis = addslashes($_POST['nip']);
$alamat = addslashes($_POST['alamat']);
$jk = addslashes($_POST['jk']);
$agama = addslashes($_POST['agama']);
$tmptlahir = addslashes($_POST['tempat']);
$tgllahir = addslashes($_POST['tanggal']);
$telp = addslashes($_POST['telepon']);
$status = addslashes($_POST['jabatan']);
$kelas = addslashes($_POST['kelas']);

// menginput data ke database
$namafolder = "img/siswa/"; //folder tempat menyimpan file
$ceknis = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM tb_siswa WHERE nis='$nis'"));
if ($ceknis > 0) {
    echo "<script>alert('NIS Sudah Digunakan');document.location.href='../admin/tambah.php'</script>";
} else if (!empty($_FILES["file"]["tmp_name"])) {
    $jenis_gambar = $_FILES['file']['type'];
    if ($jenis_gambar == "image/jpeg" || $jenis_gambar == "image/jpg" || $jenis_gambar == "image/gif" || $jenis_gambar == "image/png") {
        $gambar = $namafolder . basename($_FILES['file']['name']);
        if (move_uploaded_file($_FILES['file']['tmp_name'], $gambar)) {
            mysqli_query($koneksi, "insert into tb_siswa values ('','$nis','$nama','$kelas','$jk','$agama','$tmptlahir','$tgllahir','$alamat','$telp','$status','$nis','$nis','$gambar')");
?>
            <script language="javascript">
                alert('Berhasil menambahkan');
                document.location = "siswa2.php";
            </script>
        <?php
        } else {
        ?>
            <script language="javascript">
                alert('Gagal menambahkan');
                document.location = "siswa2.php";
            </script>
        <?php
        }
    } else {
        ?>
        <script language="javascript">
            alert('Gambar harus berformat .jpg .png .gif');
            document.location = "siswa2.php";
        </script>
<?php
    }
} else {
    echo "Anda belum memilih gambar";
}
?>