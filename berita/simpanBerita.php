<?php
include "koneksi.php";
$judul_berita  = addslashes($_POST['jdl_berita']);
$isi_berita	= addslashes($_POST['isi_berita']);
$tgl_berita	= date('d M Y H:i');

#tangkap gambar
$namafolder="gambar/"; //folder tempat menyimpan file
if (!empty($_FILES["gbr_berita"]["tmp_name"]))
{
    $jenis_gambar=$_FILES['gbr_berita']['type'];
    if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")
    {           
        $gambar = $namafolder . basename($_FILES['gbr_berita']['name']);       
        if (move_uploaded_file($_FILES['gbr_berita']['tmp_name'], $gambar)) {
           mysql_query("insert into tbl_berita values ('','$judul_berita','$isi_berita','$tgl_berita','$gambar')",$koneksi); 
		   ?>
				<script language="javascript">
                    alert('Berhasil menambahkan');
                    document.location="index.php?link=lihatBerita.php";
                </script>
   			<?php
        } else {
         	?>
				<script language="javascript">
                    alert('Gagal menambahkan');
                    document.location="index.php?link=tambahBerita.php";
                </script>
   			<?php
        }
   } else {
        ?>
			<script language="javascript">
                alert('Gambar harus berformat .jpg .png .gif');
                document.location="index.php?tambahBerita.php";
            </script>
   		<?php
   }
} else {
    echo "Anda belum memilih gambar";
}
?>