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
			<br><br>
				<h3 class="mb-30 title_color"><center>Form Siswa</center></h3>
				<div class="row">
					<div class="col-md-6 col-xs-12">
						<div class="form-group">
						<form action="simpancalonsiswa.php" method="post" enctype="multipart/form-data">	
						<label>Nomer Daftar</label><br>
							<input type="text" name="no_daftar"   class="form-control" placeholder="Nomer Daftar" maxlength="5" onkeypress="return hanyaAngka(event)"required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
							<label>Nama Lengkap</label><br>
							<input type="text" name="nama_lengkap" class="form-control" placeholder="NamaLengkap"   required>
							<label>Tempat Lahir</label><br>
							<input type="text" name="tmptlahir" class="form-control" placeholder="Tempat Lahir" required>
							<label>Tanggal Lahir</label><br>
							<input type="date" name="tgllahir" class="form-control" placeholder="Tanggal Lahir" required>
							<label>Jenis Kelamin</label><br>
							<select name="jk" required>  
								<option value="">Jenis Kelamin</option>  
								<option value="Laki - Laki">Laki - Laki</option>  
								<option value="Perempuan">Perempuan</option>  
							</select><br><br>
							<label>Agama</label><br>
							<select name="agama" required>  
								<option value="">Agama</option>  
								<option value="Islam">Islam</option>  
								<option value="Kristen">Kristen</option>
								<option value="Hindu">Hindu</option>
								<option value="Budha">Budha</option>
								<option value="Katolik">Katolik</option>
							</select><br><br><br><br>
							
							<label>Anak Ke</label><br>
							<input type="text" name="anak_ke" class="form-control" placeholder="Anak Ke" maxlength="1" onkeypress="return hanyaAngka(event)" required>
							<label>Status Dalam Keluarga</label><br>
							<input type="text" name="status_dlm_keluarga" class="form-control" placeholder="Status Dalam Keluarga" required>
							<label>Alamat Siswa</label><br>
							<input type="text" name="alamat_siswa" class="form-control" placeholder="Alamat Siswa" required>
							<label>Telpon Siswa</label><br>
							<input type="text" name="telp_siswa" class="form-control" placeholder="Telpon Siswa" maxlength="12" onkeypress="return hanyaAngka(event)" required>
							<label>Sekolah Asal</label><br>
							<input type="text" name="sekolah_asal" class="form-control" placeholder="Sekolah Asal" required>
							
						
							</div>
					</div>
					<div class="col-md-6 col-xs-12">
						<div class="form-group">
						<label>Alamat Sekolah</label><br>
							<input type="text" name="alamat_sekolah" class="form-control" placeholder="Alamat Sekolah" required>
							<label>Tahun Lulus</label><br>
							<input type="text" name="tahun_lulus" class="form-control" placeholder="Tahun Lulus" maxlength="4" onkeypress="return hanyaAngka(event)" required>
							<label>Nilai UN</label><br>
							<input type="text" name="total_nilai_un" class="form-control" placeholder="Nilai UN" onkeypress="return hanyaAngka(event)" required>
							<label>Nama Ayah</label><br>
							<input type="text" name="nama_ayah" class="form-control" placeholder="Nama Ayah" required>
							<label>Nama Ibu</label><br>
							<input type="text" name="nama_ibu" class="form-control" placeholder="Nama Ibu" required>
							<label>Alamat Orang Tua</label><br>
							<input type="text" name="alamat_ortu" class="form-control" placeholder="Alamat Orang Tua" required>
							<label>Telpon Orang Tua</label><br>
							<input type="text" name="telp_ortu" class="form-control" placeholder="Telpon Orang Tua" maxlength="12" onkeypress="return hanyaAngka(event)" required>
							<label>Pekerjaan Ayah</label><br>
							<input type="text" name="perkerjaan_ayah" class="form-control" placeholder="Pekerjaan Ayah" >
							<label>Pekerjaan Ibu</label><br>
							<input type="text" name="pekerjaan_ibu" class="form-control" placeholder="Pekerjaan Ibu" >
							<label>Nama Wali</label><br>
							<input type="text" name="nama_wali" class="form-control" placeholder="Nama Wali" >
							<label>Alamat Wali</label><br>
							<input type="text" name="alamat_wali" class="form-control" placeholder="Alamat Wali" ><br><br>
							<button class="btn btn-primary" type="submit" value="simpan">Simpan</button>
								
								<script>
									function hanyaAngka(evt) {
										var charCode = (evt.which) ? evt.which : event.keyCode
										if (charCode > 31 && (charCode < 48 || charCode > 57))

										return false;
										return true;
									}
								</script>
							
						</form>
						</div>
						</div>
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
	