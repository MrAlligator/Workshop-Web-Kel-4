<?php
include "koneksi.php";
$ambil_data = mysqli_query($koneksi,"select * from tb_berita where id='$_GET[id]'");
$hasil_data = mysqli_fetch_array($ambil_data);
?>

<div class="popular_courses lite_bg">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="main_title">
          <a href="#"><h2>Berita</h2></a>
          <div class="button-group-area mt-10">
            <a href="tambah-berita.php" class="genric-btn default">Tambah Berita</a>
          </div>
        </div>
        <div class="row">
          <div class="span12 well">
            <img class="img-polaroid" src="<?=$hasil_data['gambar'];?>" style="width:250px; height: 200px; float:left; margin-right:10px;"/>
            <div class="content-heading"><h3><?=$hasil_data['judul'];?></h3></div>
            <p><a href="#" class="btn btn-inverse">Diposkan pada <?=$hasil_data['tanggal'];?></a> </p>
            <p style="text-align:justify;"><?=$hasil_data['isi'];?></p>
            <div style="clear:both;"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>