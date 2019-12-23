<?php 
// koneksi database
include 'koneksi.php';

$nama = $_POST['nama'];
$nip = $_POST['nip'];
$alamat = $_POST['alamat'];
$jk = $_POST['jk'];
$agama = $_POST['agama'];
$tmptlahir = $_POST['tempat'];
$tgllahir = $_POST['tanggal'];
$telp = $_POST['telepon'];
$status = $_POST['jabatan'];
$ceknis = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM tb_guru WHERE nip='$nip'"));
$namafolder="img/guru/";
if($ceknis > 0){
    echo "<script>alert('NIP Sudah Digunakan');document.location.href='../admin/tambah-guru.php'</script>";
}else if (!empty($_FILES["file"]["tmp_name"])) {
    $jenis_gambar=$_FILES['file']['type'];
    if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")
    {           
        $gambar = $namafolder . basename($_FILES['file']['name']);       
        if (move_uploaded_file($_FILES['file']['tmp_name'], $gambar)) {
            mysqli_query($koneksi,"insert into tb_guru values('','$nip','$nama','$jk','$tmptlahir','$tgllahir','$agama','$alamat','$telp','$status','$nip','$nip','$gambar')");
		   ?>
				<script language="javascript">
                    alert('Berhasil menambahkan');
                    document.location="guru2.php";
                </script>
   			<?php
        } else {
         	?>
				<script language="javascript">
                    alert('Gagal menambahkan');
                    document.location="guru2.php";
                </script>
   			<?php
        }
   } else {
        ?>
			<script language="javascript">
                alert('Gambar harus berformat .jpg .png .gif');
                document.location="tambah-guru.php";
            </script>
   		<?php
   }
} else {   
    echo "<script>alert('Data Gagal diupload');document.location.href='../admin/guru2.php'</script>";
}
?>