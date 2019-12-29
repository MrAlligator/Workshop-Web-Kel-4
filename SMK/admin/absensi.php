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
							<li class="nav-item"><a class="nav-link" href="../admin/aturdata.php">KEMBALI</a></li>
							<li class="nav-item submenu dropdown">
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
							<li class="nav-item active submenu dropdown">
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
    
    <!--================End Home Banner Area =================-->


	<!-- Start Sample Area -->
	<!-- End Sample Area -->
	<!-- Start Button -->
	<!-- End Button -->
    <!-- Start Align Area -->
    <div class="whole-wrap">
		<div class="container">
			<div class="section-top-border">
                <h3 class="mb-30 title_color text-center">Absensi Siswa</h3>
				<br>
				<div class="row">
				<div class="col-md-6 col-xs-12">
					<div class="form-group">
						<form id="absen" method="post" action="aksi3.php">
							<label>NIS</label><br>
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
							</select><br><br>
							<label>Nama</label><br>
							<input type="text" id="nama" name="nama" class="form-control" readonly required>
							<label>Kelas</label><br>
							<input type="text" id="kelas" name="kelas" class="form-control" readonly required>
						</div>
					</div>
				<div class="col-md-6 col-xs-12">
					<div class="form-group">
						<label>Kehadiran</label><br>
						<input type="checkbox" name="hadir" value="Hadir">Hadir<br>
						<input type="checkbox" name="hadir" value="Sakit">Sakit<br>
						<input type="checkbox" name="hadir" value="Izin">Izin<br>
						<input type="checkbox" name="hadir" value="Tanpa Keterangan">Tanpa Keterangan<br><br><br>
						<button class="btn btn-success" type="submit">Simpan</button>
					</form>
					<a href="cetakabs.php"><button id="hapus" class="btn btn-primary">Cetak</button></a>
					</div>
				</div>
			</div>
						<br>
						<div class="progress-table-wrap">
							<div class="progress-table">
								<div class="table-head">
									<div class="serial">No</div>
									<div class="country">Tanggal</div>
									<div class="country">NIS</div>
									<div class="country">Nama</div>
									<div class="country">Kelas</div>
									<div class="country">Keterangan</div>
								</div>
								<?php 
									include 'koneksi.php';
									$no = 1;
									$tgl = date("Y-m-d");
									$data = mysqli_query($koneksi,"select * from tb_absen where tgl_absen ='$tgl'");
									while($d = mysqli_fetch_array($data)){
								?>
								<div class="table-row">
									<div class="serial"><?php echo $no++; ?></div>
									<div class="country"><?php echo $d['tgl_absen']; ?></div>
									<div class="country"><?php echo $d['nisabsen_siswa']; ?></div>
									<div class="country"><?php echo $d['namaabsen_siswa']; ?></div>
									<div class="country"><?php echo $d['kelasabsen_siswa']; ?></div>
									<div class="country"><?php echo $d['ket']; ?></div>
								</div>
								<?php
									}
								?>
							</div>
						</div>
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
	<script type="text/javascript"> 
		<?php echo $jsArray; ?>  
		function changeValue(id){  
		document.getElementById('nama').value = prdName[id].nama;
		document.getElementById('kelas').value = prdName[id].kelas;
		}
		function batascheckbox(checkgroup, limit){
		var checkgroup=checkgroup
		var limit=limit
			for (var i=0; i<checkgroup.length; i++){
				checkgroup[i].onclick=function(){
				var checkedcount=0
				for (var i=0; i<checkgroup.length; i++)
					checkedcount+=(checkgroup[i].checked)? 1 : 0
				if (checkedcount>limit){
					alert("Pilihan tidak boleh lebih dari "+limit+"")
					this.checked=false
					}
				}
			}
		}
		batascheckbox(document.forms.absen.hadir, 1)
		function coba(){
			var ok = confirm("Data Berhasil di Unduh, Reset?");
			if (ok){
				window.location = "hapusabs.php";
			} else {
				window.location = "absensi.php";
			}
		}
	</script>