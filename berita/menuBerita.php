<?php
include "koneksi.php";
$ambil_recent = mysql_query("select id_berita,judul,tanggal from tbl_berita order by rand() limit 20",$koneksi);

?>
<div class="well sidebar-nav">
    <ul class="nav nav-list">
        <li class="nav-header">Menu</li>
        <li><a href="index.php?link=tambahBerita.php">&rarr; Tambah Berita</a></li>
        <li><a href="index.php?link=lihatBerita.php">&rarr; Lihat Berita</a></li>
        <li class="nav-header">Baca Juga</li>
        <ul type="square">
        	<?php
				while($hasil_recent= mysql_fetch_array($ambil_recent)){
        			echo "<li><a href='index.php?link=lihatDetailBerita.php&id=$hasil_recent[id_berita]'>".$hasil_recent['judul']."</a></li>";
				}
			?>
        </ul>
    </ul>
</div><!--/.well ko-->