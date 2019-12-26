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
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								aria-expanded="false">Prestasi</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="akademik2.php">Akademik</a></li>
									<li class="nav-item"><a class="nav-link" href="nonakademik2.php">Non - Akademik</a></li>
								</ul>
							</li>
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
				<h3 class="mb-30 title_color"><center>Form Guru</center></h3>
				<div class="row">
					<?php
                        include 'koneksi.php';
                        $id= $_GET['id_jadwal'];
                        $data = mysqli_query($koneksi,"select * from tb_jadwal where id_jadwal='$id'");
                        while($d = mysqli_fetch_array($data)){
                        ?>
					<div class="col-md-6 col-xs-12">
						<div class="form-group">
						<form method="post" action="update-jadwal.php">
							<label>Mata Pelajaran</label><br>
							<input type="text" name="mapel" class="form-control" value="<?php echo $d['nama_mapel'] ?>" onkeypress="return hanyaHuruf(event)" required>
							
							<label>Semester</label><br>
							<select name="smstr" required>  
								<?php
									$smstr = $d['semester'];
									if ($smstr=="1") echo "<option value = '1' selected>1</option>";
									else echo "<option value = '1'>1</option>";
									if ($smstr=="2") echo "<option value = '2' selected>2</option>";
                                    else echo "<option value = '2'>2</option>";
                                    if ($smstr=="3") echo "<option value = '3' selected>3</option>";
                                    else echo "<option value = '3'>3</option>";
                                    if ($smstr=="4") echo "<option value = '4' selected>4</option>";
                                    else echo "<option value = '4'>4</option>";
                                    if ($smstr=="25") echo "<option value = '5' selected>5</option>";
                                    else echo "<option value = '5'>5</option>";
                                    if ($smstr=="6") echo "<option value = '6' selected>62</option>";
									else echo "<option value = '6'>6</option>";
								?>
							</select><br><br>
							<label>Nama Guru</label><br>
							<input type="text" name="nama" class="form-control" value="<?php echo $d['nama_guru'] ?>" onkeypress="return hanyaHuruf(event)" required>
							<label>Durasi</label><br>
							<select name="drsi" required>  
								<?php
									$drsi = $d['durasi'];
									if ($hr=="jam pertama") echo "<option value = 'jam pertama' selected>jam pertama</option>";
									else echo "<option value = 'jam pertama'>jam pertama</option>";
									if ($hr=="jam kedua") echo "<option value = 'jam kedua' selected>jam kedua</option>";
                                    else echo "<option value = 'jam kedua'>jam kedua</option>";
                                    if ($hr=="jam ketiga") echo "<option value = 'jam ketiga' selected>jam ketiga</option>";
                                    else echo "<option value = 'jam ketiga'>jam ketiga</option>";
                                    if ($hr=="jam keempat") echo "<option value = 'jam keempat' selected>jam keempat</option>";
                                    else echo "<option value = 'jam keempat'>jam keempat</option>";
                                    if ($hr=="jam kelima") echo "<option value = 'jam kelima' selected>jam kelima</option>";
                                    else echo "<option value = 'jam kelima'>jam kelima</option>";
                                    if ($hr=="jam keenam") echo "<option value = 'jam keenam' selected>jam keenam</option>";
									else echo "<option value = 'jam keenam'>jam keenam</option>";
                                    if ($hr=="jam ketujuh") echo "<option value = 'jam ketujuh' selected>jam ketujuh</option>";
									else echo "<option value = 'jam ketujuh'>jam ketujuh</option>";
                                    if ($hr=="jam kedelapan") echo "<option value = 'jam kedelapan' selected>jam kedelapan</option>";
									else echo "<option value = 'jam kedelapan'>jam kedelapan</option>";
								?>
							<label>Hari</label><br>
							<select name="hr" required>  
								<?php
									$hr = $d['hari'];
									if ($hr=="senin") echo "<option value = 'senin' selected>senin</option>";
									else echo "<option value = 'senin'>senin</option>";
									if ($hr=="selasa") echo "<option value = 'selasa' selected>selasa</option>";
                                    else echo "<option value = 'selasa'>selasa</option>";
                                    if ($hr=="rabu") echo "<option value = 'rabu' selected>rabu</option>";
                                    else echo "<option value = 'rabu'>rabu</option>";
                                    if ($hr=="kamis") echo "<option value = 'kamis' selected>kamis</option>";
                                    else echo "<option value = 'kamis'>kamis</option>";
                                    if ($hr=="jumat") echo "<option value = 'jumat' selected>jumat</option>";
                                    else echo "<option value = 'jumat'>jumat</option>";
                                    if ($hr=="sabtu") echo "<option value = 'sabtu' selected>sabtu</option>";
									else echo "<option value = 'sabtu'>sabtu</option>";
								?>
							<button class="btn btn-primary" type="submit">Simpan</button>
							</form>
						</div>	
					</div>
					<?php 
                    }
                    ?>
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
	<script>
	function hanyaAngka(evt) {
		var charCode = (evt.which) ? evt.which : event.keyCode
		if (charCode > 31 && (charCode < 48 || charCode > 57))
		
		return false;
		return true;
	}

	(function() {
		var _show = function( element, field ) {
			this.element = element;
			this.field = field;
			this.toggle();    
		};
	_show.prototype = {
		toggle: function() {
			var self = this;
			self.element.addEventListener( "change", function() {
			if( self.element.checked ) {
			self.field.setAttribute( "type", "text" );
			} else {
			self.field.setAttribute( "type", "password" );    
			}
			}, false);
		}
	};
	
	document.addEventListener( "DOMContentLoaded", function() {
		var checkbox = document.querySelector( "#show-pass" ),
		pass = document.querySelector( "#pass" ),
		_form = document.querySelector( "form" );
		var toggler = new _show( checkbox, pass );
	});
	})();
	</script>
	</html>