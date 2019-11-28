<?php
include "koneksi.php";
$judul_berita  = addslashes($_POST['judul']);
$cuplikan = addslashes($_POST['cuplikan']);
$isi_berita	= addslashes($_POST['isi']);

#tangkap gambar
$namafolder="img/berita/"; //folder tempat menyimpan file
if (!empty($_FILES["file"]["tmp_name"]))
{
    $jenis_gambar=$_FILES['file']['type'];
    if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")
    {           
        $gambar = $namafolder . basename($_FILES['file']['name']);       
        if (move_uploaded_file($_FILES['file']['tmp_name'], $gambar)) {
          mysqli_query($koneksi,"insert into tb_berita values ('','$judul_berita','$cuplikan','$isi_berita','$gambar')"); 
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