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
									<li class="nav-item"><a class="nav-link" href="siswabaru.php">Siswa Baru</a></li>
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
							<li class="nav-item active submenu dropdown">
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
	
	<style>
                    .ina {height:50;width:450;font-size:14pt;color:purple;}
                    </style>
                    
                    <center><font size=3 face="arial black" color=black>JADWAL PELAJARAN SMK DARUS SALAM</font></center>
                    <hr width=400 size=3 color=black>
                    <br>
                    
                    <center><font size=1,5 face="arial" color=black><b><i>Klik Pada Hari Yang diinginkan :</font>
                    <form name=han>
                    <center><table border=1 bgcolor=blue>
                    <tr> <td><input type=button value=Senin name=sn  onclick="sen()">
                     <td><input type=button value=Selasa name=sl onclick="sel()">
                     <td><input type=button value=Rabu name=ra   onclick="rab()">
                    
                    <tr> <td><input type=button value=Kamis name=ka  onclick="kam()">
                     <td><input type=button value=Jum'at name=ju onclick="jum()">
                     <td><input type=button value=Sabtu name=sa  onclick="sab()">
                    
                    </table>
                    
                    <br>
                    <input type=text name=hasil class=ina>
                    <br>
                    <center><font size=1 face="arial" color=black><b>
                    <br>
                    <br>
                    
                    <code>
                    
                    <script laguage=javascript>
                    function nif()
                    {
                    
                            if(document.han.ma.value=="B.Indonesia")
                    
                     {
                      document.han.ng.value="AI NURALIYAH,S.PD, N.AMOY PUSPITA SARI,Am.Pd, RENI HAERANI,S.Pd, SRI WINDARTI,S.Pd, YULIAS RAHMAWAN,S.Pd";
                     }
                       
                      
                     if(document.han.ma.value=="B.Inggris")
                    
                     {
                      document.han.ng.value="ATIN SUPRIHATIN,S.Pd, MARULLAH,S.Pd, EYEH NURHIDAYAH,S.Pd";
                     }
                    
                       
                     if(document.han.ma.value=="B.Sunda")
                    
                     {
                      document.han.ng.value="NOVIANTY,S.Pd, ROHAETI,S.Ag";
                     }
                    
                     
                       if(document.han.ma.value=="AgamaIslam")
                    
                     {
                      document.han.ng.value="GANA ISLAH GENTAMI,S.Ag,M.Pd";
                     }
                    
                     
                       if(document.han.ma.value=="SeniBudaya")
                    
                     {
                      document.han.ng.value="DELIA,S.Pd";
                     }
                    
                    
                     if(document.han.ma.value=="Matematika")
                    
                     {
                      document.han.ng.value="DUDI HERYANTO,M.Pd, SUKAESIH,S.Si, TINIKE LATIFAH SARI,S.Pd";
                     }
                    
                    
                       if(document.han.ma.value=="IPS")
                    
                     {
                      document.han.ng.value="GRIYA SURYANI,S.Pt, RINI FITHRI,S.Pd";
                     }
                    
                    
                      if(document.han.ma.value=="Biologi")
                    
                     {
                      document.han.ng.value="Drs.Hj.NURCHABIBAH,M.Pd, LANI RISLANI,S.Pd, NOVI RAHMAWATI,S.Pd";
                     }
                    
                    
                       if(document.han.ma.value=="Fisika")
                    
                     {
                      document.han.ng.value="OPA MUSTOPA,S.Pd, UJANG SUMITRA,S.Pd";
                     }
                    
                    
                       if(document.han.ma.value=="Penjaskes")
                    
                     {
                      document.han.ng.value="DUDI SUTANTO,S.Sas";
                     }
                    
                    
                       if(document.han.ma.value=="TIK")
                    
                     {
                      document.han.ng.value="ANI WIDODO, UCI SANUSI";
                     }
                    
                    
                       if(document.han.ma.value=="PKN")
                    
                     {
                      document.han.ng.value="SITI NURCHANIFAH,S.Pd";
                     }
                    
                    
                       if(document.han.ma.value=="BK")
                    
                     {
                      document.han.ng.value="Dra.DIAN MAIDARNIS";
                     }
                    
                    
                       if(document.han.ma.value=="TU")
                    
                     {
                      document.han.ng.value="ED HERMANSYAH, EUIS SOPIAH SE, IHA SOLEHA, ";
                     }
                    
                    
                       if(document.han.ma.value=="Karawitan")
                    
                     {
                      document.han.ng.value="HERI SASTRAWAN,S.Pd";
                     }
                    }
                    
                    </script>
                    
                    <style>
                    .sri {width:210}
                    </style>
                    
                    
                    <form name=han>
                    <center><table border=1 bgcolor=blue width=300>
                    
                    <tr> <td width=80><font face="arial" color=white> Mapel  <td> <select name=ma onclick="nif()">   <option value=B.Indonesia>B.Indonesia</option>
                    <option value=B.Inggris>B.Inggris</option>
                     <option value=B.Sunda>B.Sunda</option>
                    <option value=AgamaIslam>AgamaIslam</option>
                     <option value=SeniBudaya>SeniBudaya</option>
                     <option value=Matematika>Matematika</option>
                     <option value=IPS>IPS</option>
                     <option value=Biologi>Biologi</option>
                     <option value=Fisika>Fisika</option>
                     <option value=Penjaskes>Penjaskes</option>
                     <option value=TIK>TIK</option>
                     <option value=PKN>PKN</option
                     ><option value=BK>BK</option>
                     <option value=TU>TU</option>
                    <option value=Karawitan>Karawitan</option>
                             
					<tr> <td><font face="arial" color=white> Nama Guru <td> <input type=text name=ng class=sri>
					<tr> <td><font face="arial" color=white> Hari <td> <input type=text name=ng class=sri>
					
                    </table>
                    </code>
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