<?php
session_start(); // Start session nya
// Kita cek apakah user sudah login atau belum
// Cek nya dengan cara cek apakah terdapat session username atau tidak
if( ! isset($_SESSION['uname'])){ // Jika tidak ada session username berarti dia belum login
  header("location: ../index.php"); // Kita Redirect ke halaman index.php karena belum login
}
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
							<li class="nav-item"><a class="nav-link" href="../admin/tampilcalonsiswa.php">Kembali</a></li>
							<li class="nav-item">
								<a href="tampilcalonsiswa.php" class="nav-link" role="button" aria-haspopup="true"
								aria-expanded="false">Data Calon</a>
							</li>
							
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

						<h3 class="mb-30 title_color">Calon Siswa</h3>
						<form action="simpancalonsiswa.php" method="post" enctype="multipart/form-data">	
						<?php 
							include 'koneksi.php';
							$id = $_GET['id_daftar'];
							$data = mysqli_query($koneksi,"select * from tb_calon_siswa where id_daftar='$id'");
							while($d = mysqli_fetch_array($data)){
						?>
							<table>
								<tr>

									<td>No Daftar</td>
    	                            <td><input type="text" size="40" name="no_daftar" placeholder=""  value="<?php echo $d['no_daftar']; ?>" class="form-control"disabled></td>
								</tr>
								<tr>
									<td>Nama Lengkap</td>
    	                            <td><input type="text" size="40" name="nama_lengkap" placeholder=""  value="<?php echo $d['nama_lengkap']; ?>" required class="form-control"disabled></td>
								</tr>
								<tr>
									<td>Tempat Lahir</td>
    	                            <td><input type="text" size="40" name="tmptlahir" placeholder="" value="<?php echo $d['tmptlahir']; ?>" required class="form-control"disabled></td>
								</tr>
								<tr>
									<td>Tanggal Lahir</td>
    	                            <td><input type="text" size="40" name="tgllahir" value="<?php echo $d['tgllahir']; ?>" placeholder="" required class="form-control"disabled></td>
								</tr>
								<tr>
									<td>Jenis Kelamin</td>
    	                            <td><input type="text" size="40" name="jk" value="<?php echo $d['jk']; ?>" placeholder="" required class="form-control"disabled></td>
								</tr>
								<tr>
									<td>Agama</td>
    	                            <td><input type="text" size="40" name="agama" value="<?php echo $d['agama']; ?>" placeholder="" required class="form-control"disabled></td>
								</tr>
								<tr>
									<td>Anak Ke</td>
    	                            <td><input type="text" size="40" name="anak_ke" value="<?php echo $d['anak_ke']; ?>" placeholder="" required class="form-control"disabled></td>
								</tr>
								<tr>
									<td>Status Dalam Keluarga</td>
    	                            <td><input type="text" size="40" name="status_dlm_keluarga" value="<?php echo $d['status_dlm_keluarga']; ?>" placeholder="" required class="form-control"disabled></td>
								</tr>
								<tr>
									<td>Alamat Siswa</td>
    	                            <td><input type="text" size="40" name="alamat_siswa" value="<?php echo $d['alamat_siswa']; ?>" placeholder="" required class="form-control"disabled></td>
								</tr>
								<tr>
									<td>Telepon Siswa</td>
    	                            <td><input type="text" size="40" name="telp_siswa" value="<?php echo $d['telp_siswa']; ?>" placeholder="" required class="form-control"disabled></td>
								</tr>
								<tr>
									<td>Sekolah Asal</td>
    	                            <td><input type="text" size="40" name="sekolah_asal" value="<?php echo $d['sekolah_asal']; ?>" placeholder="" required class="form-control"disabled></td>
								</tr>
								<tr>
									<td>Alamat Sekolah</td>
    	                            <td><input type="text" size="40" name="alamat_sekolah" value="<?php echo $d['alamat_sekolah']; ?>" placeholder="" required class="form-control"disabled></td>
								</tr>
								<tr>
									<td>Tahun Lulus</td>
    	                            <td><input type="text" size="40" name="tahun_lulus" value="<?php echo $d['tahun_lulus']; ?>" placeholder="" required class="form-control"disabled></td>
								</tr>
								<tr>
									<td>Total Nilai UN</td>
    	                            <td><input type="text" size="40" name="total_nilai_un" value="<?php echo $d['total_nilai_un']; ?>" placeholder="" required class="form-control"disabled></td>
								</tr>
								<tr>
									<td>Nama Ayah</td>
    	                            <td><input type="text" size="40" name="nama_ayah" value="<?php echo $d['nama_ayah']; ?>" placeholder="" required class="form-control"disabled></td>
								</tr>
								<tr>
									<td>Nama Ibu</td>
    	                            <td><input type="text" size="40" name="nama_ibu" value="<?php echo $d['nama_ibu']; ?>" placeholder="" required class="form-control"disabled></td>
								</tr>
								<tr>
									<td>Alamat Orang Tua</td>
    	                            <td><input type="text" size="40" name="alamat_ortu" value="<?php echo $d['alamat_ortu']; ?>" placeholder="" required class="form-control"disabled></td>
								</tr>
								<tr>
									<td>Telepon Orang Tua</td>
    	                            <td><input type="text" size="40" name="telp_ortu" value="<?php echo $d['telp_ortu']; ?>" placeholder="" required class="form-control"disabled></td>
								</tr>
								<tr>
									<td>Pekerjaan Ayah</td>
    	                            <td><input type="text" size="40" name="perkerjaan_ayah" value="<?php echo $d['perkerjaan_ayah']; ?>" placeholder="" required class="form-control"disabled></td>
								</tr>
								<tr>
									<td>Pekerjaan Ibu</td>
    	                            <td><input type="text" size="40" name="pekerjaan_ibu" value="<?php echo $d['pekerjaan_ibu']; ?>" placeholder="" required class="form-control"disabled></td>
								</tr>
								<tr>
									<td>Nama Wali</td>
    	                            <td><input type="text" size="40" name="nama_wali" value="<?php echo $d['nama_wali']; ?>" placeholder=""  class="form-control"disabled></td>
								</tr>
								<tr>
									<td>Alamat Wali</td>
    	                            <td><input type="text" size="40" name="alamat_wali" value="<?php echo $d['alamat_wali']; ?>" placeholder=""  class="form-control"disabled></td>
								</tr>
								<?php
							}
						?>
								
								<script>
									function hanyaAngka(evt) {
										var charCode = (evt.which) ? evt.which : event.keyCode
										if (charCode > 31 && (charCode < 48 || charCode > 57))

										return false;
										return true;
									}
								</script>
							</table>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Align Area -->

	<!--================ Start footer Area  =================-->
	<footer class="footer-area section_gap">
		<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<font size="3" color="#333333">&copy;2019 || SMK DARUS SALAM<br>All Rights Reserved<br>Powered by Kelompok 4</font>
					</div>
				</div>
		</div>
	</footer>
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
	