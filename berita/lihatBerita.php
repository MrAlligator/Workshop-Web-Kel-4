<?php
#------- memulai page number -------------------------------------------------------------------------------------#
$dataPerPage = 5; 
if(isset($_GET['hal']))
{	
	$noPage = $_GET['hal'];
}else{	
	$noPage = 1;
}
$offset   = ($noPage - 1) * $dataPerPage;
include "koneksi.php";
$ambil_data = mysql_query("select * from tbl_berita order by id_berita desc limit $offset, $dataPerPage",$koneksi);
$hitung_record = mysql_query("SELECT COUNT(*) AS jumData FROM tbl_berita",$koneksi);
$data          = mysql_fetch_array($hitung_record);
$jumData       = $data['jumData'];
$jumPage  = ceil($jumData/$dataPerPage);
# ceil digunakan untuk membulatkan hasil pembagian
#------- akhir page number -------------------------------------------------------------------------------------#

while($hasil_data = mysql_fetch_array($ambil_data)){
?>
	<div class="row-fluid">
      <div class="span4">
        <img data-src="holder.js/300x200" alt="300x200" src="<?=$hasil_data['gambar'];?>" style="width: 300px; height: 200px;">
      </div>
      <div class="span8">
          <h2><?=$hasil_data['judul'];?></h2>
          <p style="text-align:justify;"><?=substr($hasil_data['isi'],0,500);?></p>
          <p>
          	<a href="index.php?link=lihatDetailBerita.php&id=<?=$hasil_data['id_berita'];?>" class="btn btn-primary">Baca Selengkapnya</a> 
          	<a href="#" class="btn btn-inverse">Diposkan pada <?=$hasil_data['tanggal'];?></a>
          </p>
      </div>      
    </div>
    <hr>
<?php
}
?>

<!----  menampilkan page number di bawah post ------------>
<div class="pagination pagination-centered">
    <ul>
	<?php
		$link = "index.php?link=lihatBerita.php&hal=";
		# menampilkan link previous
		if ($noPage > 1) echo  "<li><a href='".$link."".($noPage-1)."'>&larr; Prev</a></li>";
		# memunculkan nomor halaman dan linknya
		for($jml_hal = 1; $jml_hal <= $jumPage; $jml_hal++)
		{
			if($noPage == $jml_hal){
				echo "<li class='disabled'><a href='#' style='cursor'>".$jml_hal."</a></li> ";
			}else{
				echo "<li><a href='".$link."".$jml_hal."'>".$jml_hal."</a></li> ";}
		}
		# menampilkan link next
		if ($noPage < $jumPage) echo "<li><a href='".$link."".($noPage+1)."'>Next &rarr;</a></li>";
		?>
    </ul>
</div>