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
							<li class="nav-item"><a class="nav-link" href="aturdata.php">Kembali</a></li>
							<li class="nav-item">
								<a href="siswa2.php" class="nav-link" role="button" aria-haspopup="true"
								aria-expanded="false">Daftar Siswa</a>
							</li>
							<li class="nav-item">
								<a href="nilaisiswa.php" class="nav-link" role="button" aria-haspopup="true"
								aria-expanded="false">Nilai Siswa</a>
							</li>
							<li class="nav-item">
								<a href="uploadmateri.php" class="nav-link" role="button" aria-haspopup="true"
								aria-expanded="false">Upload Materi</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link search" id="search">
									<i class="lnr lnr-magnifier"></i>
								</a>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								aria-expanded="false">GURU</a>
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
						<h3 class="mb-30 title_color">Input Nilai</h3>
						<form class="form-group" action="simpannilai.php" method="post" enctype="multipart/form-data">	
							<table>
								<tr>
									<td>NIS</td>
									<td>
										<select id="nis" name="nis" onchange="changeValue(this.value)">
										<option disabled="" selected="">Pilih</option>
										<?php
										include "koneksi.php";
										$sql=mysqli_query($koneksi, "SELECT * FROM tb_siswa");
										$jsArray = "var prdName = new Array();\n";
										while ($data=mysqli_fetch_array($sql)) {
											echo '<option value="'.$data['nis'].'">'.$data['nis'].'</option> ';
											$jsArray .= "prdName['" . $data['nis'] . "'] = {nama:'" . addslashes($data['nama_siswa']) . "',kelas:'".addslashes($data['kelas'])."'};\n";
										}
										?>
										</select>
									</td>
								</tr>
								<tr>
									<td>Nama</td>
									<td><input type="text" name="nama" id="nama" readonly="" placeholder="Nama" required class="single-input"></td>
								</tr>
								<tr>
									<td>Kelas</td>
									<td><input type="text" name="kelas" id="kelas" readonly="" placeholder="Kelas" required class="single-input"></td></td>
								</tr>
								<tr>
									<td>Mata Pelajaran</td>
									<td><input type="text" name="mapel" placeholder="Mata Pelajaran" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nilai Ulangan Harian'"
                        	        onkeypress="return hanyaAngka(event)" required class="single-input"></td>
								</tr>
								<tr>
									<td>Nilai Ulangan Harian</td>
									<td><input type="text" name="uh" placeholder="Nilai Ulangan Harian" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nilai Ulangan Harian'"
                        	        onkeypress="return hanyaAngka(event)" required class="single-input"></td>
								</tr>
								<tr>
									<td>Nilai UTS</td>
									<td><input type="text" name="uts" placeholder="Nilai UTS" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nilai UTS'"
                        	        onkeypress="return hanyaAngka(event)" required class="single-input"></td>
								</tr>
								<tr>
									<td>Nilai UAS</td>
									<td><input type="text" name="uas" placeholder="Nilai UAS" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nilai UAS'"
                        	        onkeypress="return hanyaAngka(event)" required class="single-input"></td>
								</tr>
								<tr>
									<td>Nilai Sikap</td>
									<td><input type="text" name="sikap" placeholder="Nilai Sikap" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nilai SIkap'"
                        	        onkeypress="return hanyaHuruf(event) "required class="single-input"></td>
								</tr>
								<tr>
					    			<td><input type="submit" value="Simpan Nilai"></td>
								</tr>
								<script>
									function hanyaAngka(evt) {
										var charCode = (evt.which) ? evt.which : event.keyCode
										if (charCode > 31 && (charCode < 48 || charCode > 57))

										return false;
										return true;
									}
									<?php echo $jsArray; ?>  
									function changeValue(id){  
										document.getElementById('nama').value = prdName[id].nama;
										document.getElementById('kelas').value = prdName[id].kelas;
									};
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
	