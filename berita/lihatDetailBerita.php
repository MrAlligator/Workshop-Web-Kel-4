<?php
include "koneksi.php";
$ambil_data = mysqli_query($koneksi,"select * from tbl_berita where id_berita='$_GET[id]'");
$hasil_data = mysqli_fetch_array($ambil_data);
?>

<div class="paragraphs">
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