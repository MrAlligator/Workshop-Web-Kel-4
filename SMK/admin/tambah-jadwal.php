<?php
session_start(); // Start session nya
// Kita cek apakah user sudah login atau belum
// Cek nya dengan cara cek apakah terdapat session username atau tidak
if( ! isset($_SESSION['username'])){ // Jika tidak ada session username berarti dia belum login
  header("location: ../index.php"); // Kita Redirect ke halaman index.php karena belum login
}
?>
<?php
require 'koneksi.php';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/logosmk.png" type="image/png">
    <title>SMK Darus Salam</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="vendors/linericon/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="vendors/animate-css/animate.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!--================ Start Header Menu Area =================-->
    <header class="header_area">
		<div class="main_menu">
			<div class="search_input" id="search_input_box">
				<div class="container">
					<form class="d-flex justify-content-between" method="" action="">
						<input type="text" class="form-control" id="search_input" placeholder="Cari">
						<button type="submit" class="btn"></button>
						<span class="lnr lnr-cross" id="close_search" title="Tutup"></span>
					</form>
				</div>
			</div>

			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.php"><img src="img/logo2.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
						aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item"><a class="nav-link" href="../admin/aturdata.php">KEMBALI</a></li>
							<li class="nav-item active submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								aria-expanded="false">Data</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="siswa2.php">Siswa</a></li>
									<li class="nav-item"><a class="nav-link" href="guru2.php">Guru</a></li>
									<li class="nav-item"><a class="nav-link" href="karyawan2.php">Karyawan</a></li>
									<li class="nav-item"><a class="nav-link" href="tampil_admin.php">Admin</a></li>
									<li class="nav-item"><a class="nav-link" href="tampilcalonsiswa.php">Siswa Baru</a></li>
									<li class="nav-item"><a class="nav-link" href="jadwal.php">Jadwal</a></li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								aria-expanded="false">Kehadiran</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="absensi.php">Daftar Hadir</a></li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								aria-expanded="false">Galeri</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="photo2.php">Foto</a></li>
									<li class="nav-item"><a class="nav-link" href="video2.php">Video</a></li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								aria-expanded="false">Info</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="pengumuman2.php">Pengumuman</a></li>
									<li class="nav-item"><a class="nav-link" href="berita2.php">Berita</a></li>
								</ul>
							</li>
							<li class="nav-item"><a class="nav-link" href="../admin/akademik.php">Prestasi</a></li>
							<li class="nav-item"><a class="nav-link" href="../admin/walikelas.php">Wali Kelas</a></li>
							<li class="nav-item">
								<a href="#" class="nav-link search" id="search">
									<i class="lnr lnr-magnifier"></i>
								</a>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								aria-expanded="false">ADMIN</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
    <!--================ End Header Menu Area =================-->

    <!--================Home Banner Area =================-->
    
    <section>
	
    </section>
    <!--================End Home Banner Area =================-->


	<!-- Start Sample Area -->
	<!-- End Sample Area -->
	<!-- Start Button -->
	<!-- End Button -->
    <!-- Start Align Area -->
	
	<div class="whole-wrap">
		<div class="container">
			<div class="section-top-border">
				<div class="row">
					<div class="col-lg-8 col-md-8">
						<h3 class="mb-30 title_color">Tambah Jadwal Pelajaran</h3>
						<form action="simpanjadwal.php" method="post" enctype="multipart/form-data">	
							<table>
							<tr>
									<td>Mata Pelajaran</td>
									<td>
									<select name="nama_mapel"  required>  
										<option value="">-Pilih-</option>
										<?php
										$sql_kategori = mysqli_query($koneksi, "SELECT * FROM tb_mapel");
										while ($data_kategori = mysqli_fetch_array($sql_kategori)){
											echo '<option value="'.$data_kategori['nama_mapel'].'">' .$data_kategori['nama_mapel']. '</option>';

										}  
										?>
									</select>
									</td>
								</tr>
								
								<tr>
									<td>Semester</td>
									<td>
									<select name="semester" required>  
									<option value="">-Pilih-</option>
										<option value="1">1</option>  
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>  
										<option value="5">5</option>
										<option value="6">6</option>
										</select>
									</td>
								</tr>
							<tr>
									<td>Nama Guru</td>
									<td>
									<select name="nama_guru"  required> 
									<option value="">-Pilih-</option>
										<?php
										$sql_kategori = mysqli_query($koneksi, "SELECT * FROM tb_guru");
										while ($data_kategori = mysqli_fetch_array($sql_kategori)){
											echo '<option value="'.$data_kategori['nama_guru'].'">' .$data_kategori['nama_guru']. '</option>';

										}  
										?> 
										
									</select>
									</td>
								</tr>
								<tr>
									<td>Waktu</td>
									<td>
									<select name="durasi"  required> 
									<option value="">-Pilih-</option> 
										<option value="07.00 - 07-45">07.00 - 07-45</option>  
										<option value="07.45 - 08.30">07.45 - 08.30</option>
										<option value="08.30 - 09.15">08.30 - 09.15</option>   
										<option value="09.15 - 10.00">09.15 - 10.00</option>
										<option value="10.15 - 11.00">10.15 - 11.00</option>
										<option value="11.00 - 11.45">11.00 - 11.45</option>
										<option value="11.45 - 12.30">11.45 - 12.30</option>
										<option value="12.30 - 13.15">12.30 - 13.15</option>
										 
									</select>
									</td>
								</tr>
								<tr>
									<td>Hari</td>
									<td>
									<select name="hari"  required>  
									<option value="">-Pilih-</option>  
										<option value="Senin">Senin</option>
										<option value="Selasa">Selasa</option>   
										<option value="Rabu">Rabu</option>
										<option value="Kamis">Kamis</option>
										<option value="Jumat">Jumat</option>
										<option value="Sabtu">Sabtu</option>
									</select>
									</td>
								</tr>
								
								
								<tr>
					    			<td><input class="btn btn-primary" type="submit" value="Simpan"></td>
								</tr>
								
							</table>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Align Area -->

    <!--================ Start footer Area  =================-->
        <footer></footer>
		<!--================ End footer Area  =================-->
	
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/popper.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/stellar.js"></script>
		<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
		<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
		<script src="js/owl-carousel-thumb.min.js"></script>
		<script src="js/jquery.ajaxchimp.min.js"></script>
		<script src="vendors/counter-up/jquery.counterup.js"></script>
		<script src="js/mail-script.js"></script>
		<!--gmaps Js-->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
		<script src="js/gmaps.min.js"></script>
		<script src="js/theme.js"></script>
	</body>
	
	</html>