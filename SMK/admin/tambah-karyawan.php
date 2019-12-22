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
    <!--================End Home Banner Area =================-->


	<!-- Start Sample Area -->
	<!-- End Sample Area -->
	<!-- Start Button -->
	<!-- End Button -->
    <!-- Start Align Area -->
    <div class="whole-wrap">
		<div class="container">
			<br><br>
				<h3 class="mb-30 title_color"><center>Form Karyawan</center></h3>
				<div class="row">
					<div class="col-md-6 col-xs-12">
						<div class="form-group">
						<form method="post" action="tambah_aksi3.php">
							<label>Status</label><br>
							<input type="text" name="jabatan" readonly value="karyawan" class="form-control">
							<label>NIP</label><br>
							<input type="text" name="nip" class="form-control" placeholder="Nomor Induk Pegawai" onkeypress="return hanyaAngka(event)" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
							<label>Nama</label><br>
							<input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" onkeypress="return hanyaHuruf(event)" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
							<label>Jenis Kelamin</label><br>
							<select name="jk" required>  
								<option value="" disabled>Jenis Kelamin</option>  
								<option value="Laki - Laki">Laki - Laki</option>  
								<option value="Perempuan">Perempuan</option>  
							</select><br><br>
							<label>Agama</label><br>
							<select name="agama" required>  
								<option value="" disabled>Agama</option>  
								<option value="Islam">Islam</option>  
								<option value="Kristen">Kristen</option>
								<option value="Hindu">Hindu</option>
								<option value="Budha">Budha</option>
								<option value="Katolik">Katolik</option>
							</select><br><br>
						</div>
					</div>
					<div class="col-md-6 col-xs-12">
						<div class="form-group">
							<label>Tempat Lahir</label><br>
							<input type="text" name="tempat" class="form-control" placeholder="Tempat Lahir" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
							<label>Tanggal Lahir</label><br>
							<input type="date" name="tanggal" class="form-control" placeholder="Tanggal Lahir" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
							<label>Alamat</label><br>
							<textarea type="text" name="alamat" class="form-control" cols="40" rows="5" placeholder="Alamat" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')"></textarea>
							<label>Nomor Telepon</label><br>
							<input type="text" name="telepon" class="form-control" placeholder="Nomor Telepon" maxlength="13" onkeypress="return hanyaAngka(event)" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')"><br>
							<button class="btn btn-primary" type="submit">Simpan</button>
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
	<script>
		function hanyaAngka(evt) {
			var charCode = (evt.which) ? evt.which : event.keyCode
			if (charCode > 31 && (charCode < 48 || charCode > 57))
			return false;
			return true;
		}
		function hanyaHuruf(evt) {
			var charCode = (evt.which) ? evt.which : event.keyCode
			if ((charCode < 65 || charCode > 90)&&(charCode < 97 || charCode > 122)&&charCode>32)
			return false;
			return true;
		}
	</script>