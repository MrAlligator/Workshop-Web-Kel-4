<?php 
include 'koneksi.php';
if($_POST['upload']){
	$ekstensi_diperbolehkan	= array('png','jpg');
	$nama = $_FILES['file']['name'];
	$x = explode('.', $nama);
	$ekstensi = strtolower(end($x));
	$ukuran	= $_FILES['file']['size'];
	$file_tmp = $_FILES['file']['tmp_name'];	
		if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
			if($ukuran < 1044070){			
				move_uploaded_file($file_tmp, 'img/gallery/'.$nama);
				$query = mysqli_query($koneksi, "INSERT INTO tb_foto VALUES(NULL, '$nama')");
				if($query){
					echo 'FILE BERHASIL DI UPLOAD';
				}else{
					echo 'GAGAL MENGUPLOAD GAMBAR';
				}
			}else{
				echo 'UKURAN FILE TERLALU BESAR';
			}
			}else{
				echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
			}
}
header("location:photo.php");
?>