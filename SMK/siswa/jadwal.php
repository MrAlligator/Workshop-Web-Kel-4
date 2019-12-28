<?php
session_start(); 
if( ! isset($_SESSION['username'])){ 
  header("location: ../index.php"); 
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
							<li class="nav-item"><a class="nav-link" href="../siswa/index.php">KEMBALI</a></li>
							<li class="nav-item">
								<a href="../siswa/jadwal.php" class="nav-link" role="button" aria-haspopup="true"
								aria-expanded="false">Jadwal</a>
							</li>
							<li class="nav-item">
								<a href="../siswa/materi.php" class="nav-link" role="button" aria-haspopup="true"
								aria-expanded="false">Materi</a>
							</li>
							<li class="nav-item">
								<a href="../siswa/nilai.php" class="nav-link" role="button" aria-haspopup="true"
								aria-expanded="false">Nilai</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link search" id="search">
									<i class="lnr lnr-magnifier"></i>
								</a>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								aria-expanded="false">SISWA</a>
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

    <div class="whole-wrap">
		<div class="container">
			<div class="section-top-border">
                <h3 class="mb-30 title_color text-center">JADWAL SEKOLAH</h3>
				<br>
				<div class="progress-table-wrap">
					<div class="progress-table">
						<div class="table-head">
                            <div class="serial">No</div>
							<div class="country">Mata Pelajaran</div>
							<div class="country">Semester</div>
							<div class="country">Nama Guru</div>
							<div class="country">Waktu</div>
							<div class="country">Hari</div>
						</div>
                        <?php 
                            include 'koneksi.php';
                            $no = 1;
                            if(isset($_GET['semester'])){
								$kelas = $_GET['semester'];
								$sql = mysqli_query($koneksi,"select * from tb_jadwal where semester='$semester'");
							}else{
								$sql = mysqli_query($koneksi,"select * from tb_jadwal");
							}
                            while($d = mysqli_fetch_array($sql)){
                        ?>
						<div class="table-row">
							<div class="serial"><?php echo $no++; ?></div>
							<div class="country"><?php echo $d['nama_mapel']; ?></div>
							<div class="country"><?php echo $d['semester']; ?></div>
							<div class="country"><?php echo $d['nama_guru']; ?></div>
							<div class="country"><?php echo $d['durasi']; ?></div>
							<div class="country"><?php echo $d['hari']; ?></div>
						</div>
                        <?php
                            }
                        ?>
                    </div>
				</div>
			</div>
		</div>
	</div>

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