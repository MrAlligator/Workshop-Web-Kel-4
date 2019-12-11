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
							<li class="nav-item"><a class="nav-link" href="../admin/aturdata.php">Kembali</a></li>
							<li class="nav-item">
								<a href="siswa2.php" class="nav-link" role="button" aria-haspopup="true"
								aria-expanded="false">Daftar Siswa</a>
							</li>
							<li class="nav-item"><a class="nav-link" href="../admin/tampilcalonsiswa.php">Calon Siswa</a></li>
							<li class="nav-item">
								<a href="#" class="nav-link search" id="search">
									<i class="lnr lnr-magnifier"></i>
								</a>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								aria-expanded="false">Admin</a>
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
						<h3 class="mb-30 title_color">Input Calon Siswa</h3>
						<form action="simpancalonsiswa.php" method="post" enctype="multipart/form-data">	
							<table>
								<tr>
									<td>No Daftar</td>
    	                            <td><input type="text" size="40" name="no_daftar" placeholder="No Daftar" required class="single-input"></td>
								</tr>
								<tr>
									<td>Nama Lengkap</td>
    	                            <td><input type="text" size="40" name="nama_lengkap" placeholder="Nama Lengkap" required class="single-input"></td>
								</tr>
								<tr>
									<td>Tempat Lahir</td>
    	                            <td><input type="text" size="40" name="tmptlahir" placeholder="Tempat Lahir" required class="single-input"></td>
								</tr>
								<tr>
									<td>Tanggal Lahir</td>
									<td><input type="date" name="tgllahir" placeholder="Tanggal Lahir" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tanggal Lahir'"
									required class="single-input"></td>
								</tr>
								<tr>
									<td>Jenis Kelamin</td>
									<td>
									<select name="jk">
										<option value="">Jenis Kelamin</option>      
										<option value="laki-laki">Laki-laki</option>  
										<option value="prempuan">Prempuan</option> 
									</select>
									</td>
								</tr>
								<tr>
									<td>Agama</td>
									<td>
									<select name="agama">    
										<option value="islam">Islam</option>  
										<option value="hindu">Hindu</option> 
										<option value="kristen">Kristen</option>   
										<option value="buddha">Buddha</option> 
									</select>
									</td>
								</tr>
								<tr>
									<td>Anak Ke</td>
    	                            <td><input type="text" size="40" name="anak_ke" placeholder="Anak Ke" required class="single-input"></td>
								</tr>
								<tr>
									<td>Status Dalam Keluarga</td>
    	                            <td><input type="text" size="40" name="status_dlm_keluarga" placeholder="Status Dalam Keluarga" required class="single-input"></td>
								</tr>
								<tr>
									<td>Alamat Siswa</td>
    	                            <td><input type="text" size="40" name="alamat_siswa" placeholder="Alamat Siswa" required class="single-input"></td>
								</tr>
								<tr>
									<td>Telepon Siswa</td>
    	                            <td><input type="text" size="40" name="telp_siswa" placeholder="Telpon Siswa" required class="single-input"></td>
								</tr>
								<tr>
									<td>Sekolah Asal</td>
    	                            <td><input type="text" size="40" name="sekolah_asal" placeholder="Sekolah Asal" required class="single-input"></td>
								</tr>
								<tr>
									<td>Alamat Sekolah</td>
    	                            <td><input type="text" size="40" name="alamat_sekolah" placeholder="Alamat Sekolah" required class="single-input"></td>
								</tr>
								<tr>
									<td>Tahun Lulus</td>
    	                            <td><input type="text" size="40" name="tahun_lulus" placeholder="Tahun Lulus" required class="single-input"></td>
								</tr>
								<tr>
									<td>Total Nilai UN</td>
    	                            <td><input type="text" size="40" name="total_nilai_un" placeholder="Total Nilai UN" required class="single-input"></td>
								</tr>
								<tr>
									<td>Nama Ayah</td>
    	                            <td><input type="text" size="40" name="nama_ayah" placeholder="Nama Ayah" required class="single-input"></td>
								</tr>
								<tr>
									<td>Nama Ibu</td>
    	                            <td><input type="text" size="40" name="nama_ibu" placeholder="Nama Ibu" required class="single-input"></td>
								</tr>
								<tr>
									<td>Alamat Orang Tua</td>
    	                            <td><input type="text" size="40" name="alamat_ortu" placeholder="Alamat Orang Tua" required class="single-input"></td>
								</tr>
								<tr>
									<td>Telepon Orang Tua</td>
    	                            <td><input type="text" size="40" name="telp_ortu" placeholder="Telepon Orang Tua" required class="single-input"></td>
								</tr>
								<tr>
									<td>Pekerjaan Ayah</td>
    	                            <td><input type="text" size="40" name="perkerjaan_ayah" placeholder="Pekerjaan Ayah" required class="single-input"></td>
								</tr>
								<tr>
									<td>Pekerjaan Ibu</td>
    	                            <td><input type="text" size="40" name="pekerjaan_ibu" placeholder="Pekerjaan Ibu" required class="single-input"></td>
								</tr>
								<tr>
									<td>Nama Wali</td>
    	                            <td><input type="text" size="40" name="nama_wali" placeholder="Nama Wali"  class="single-input"></td>
								</tr>
								<tr>
									<td>Alamat Wali</td>
    	                            <td><input type="text" size="40" name="alamat_wali" placeholder="Alamat Wali"  class="single-input"></td>
								</tr>
								<tr>
					    			<td><input type="submit" value="Simpan"></td>
								</tr>
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
	