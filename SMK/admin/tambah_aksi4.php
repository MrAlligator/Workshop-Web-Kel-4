<?php
// Load file koneksi.php
include "koneksi.php";
// Ambil Data yang Dikirim dari Form
$judul = addslashes($_POST['judul']);
$isi = addslashes($_POST['isi']);
$tanggal = date('d M Y H:i');
  
$namafolder="img/berita/"; //folder tempat menyimpan file
if (!empty($_FILES["file"]["tmp_name"]))
{
    $jenis_gambar=$_FILES['file']['type'];
    if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")
    {           
        $gambar = $namafolder . basename($_FILES['file']['name']);       
        if (move_uploaded_file($_FILES['file']['tmp_name'], $gambar)) {
           mysqli_query($koneksi,"insert into tb_berita values ('','$judul','$isi','$tanggal','$gambar')"); 
		   ?>
				<script language="javascript">
                    alert('Berhasil menambahkan');
                    document.location="berita2.php";
                </script>
   			<?php
        } else {
         	?>
				<script language="javascript">
                    alert('Gagal menambahkan');
                    document.location="berita2.php";
                </script>
   			<?php
        }
   } else {
        ?>
			<script language="javascript">
                alert('Gambar harus berformat .jpg .png .gif');
                document.location="berita2.php";
            </script>
   		<?php
   }
} else {
    echo "Anda belum memilih gambar";
}
?>