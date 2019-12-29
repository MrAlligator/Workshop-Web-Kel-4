<?php
// Load file koneksi.php
include "koneksi.php";
// Ambil Data yang Dikirim dari Form
$judul_prestasi = addslashes($_POST['judul_prestasi']);
$isi_prestasi = addslashes($_POST['isi_prestasi']);
$jenis_p = addslashes($_POST['jenis_p']);
$tanggal_prestasi = addslashes($_POST['tanggal_prestasi']);
  
$namafolder="img/berita/"; //folder tempat menyimpan file
if (!empty($_FILES["file"]["tmp_name"]))
{
    $jenis_gambar=$_FILES['file']['type'];
    if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")
    {           
        $gambar = $namafolder . basename($_FILES['file']['name']);       
        if (move_uploaded_file($_FILES['file']['tmp_name'], $gambar)) {
           mysqli_query($koneksi,"insert into tb_prestasi values ('','$judul_prestasi','$isi_prestasi','$jenis_p','$tanggal_prestasi','$gambar')"); 
		   ?>
				<script language="javascript">
                    alert('Berhasil menambahkan');
                    document.location="akademik.php";
                </script>
   			<?php
        } else {
         	?>
				<script language="javascript">
                    alert('Gagal menambahkan');
                    document.location="tambah-prestasi.php";
                </script>
   			<?php
        }
   } else {
        ?>
			<script language="javascript">
                alert('Gambar harus berformat .jpg .png .gif');
                document.location="tambah-prestasi.php";
            </script>
   		<?php
   }
} else {
    echo "Anda belum memilih gambar";
}
?>