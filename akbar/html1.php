<html>
    <title>Akbar_coba</title>
    <head>
        <body>
           
           
           <marquee> <h1 style ="color:red ">Selamat Belajar Html </h1></marquee>
            <center><h2 style = "color:aqua ">Nama saya : Akbar </h2>
            <h3>Politeknik negeri jember </h3>
            <h1>===========================================================</h1>
            <h2>Php Mode Dibawah</h2></center>
            <?php
            echo "<center>";
    echo "Hallo Kelas TIF </br></br>";
    $tempat = "di Polije";
	$Tempat = "di Polije Dua";
	$TempaT = "di Polije Tiga";

	echo "<h1 style='color:red'>Selamat Belajar PHP ".$tempat."</h1>";
	ECHO "<h2 style='color:blue'>Selamat Belajar PHP</h2>";
	EcHo "<h3>Selamat Belajar PHP ".$Tempat."</h3>";
	echo $TempaT."</br></br>";
	echo date("Y/m/d")."</br></br>";

	//Penjumlahan
	$a = 100; $b = $c = 100; $d = 2;
	$jumlah = ($a + $b)/$d;

	echo $jumlah."</br></br>";

	for ($x = 0; $x <= 10; $x++) {
    	echo "Tempat Ke - ".$x."<br>";
		}

	$t = date("H");

	if ($t < "20") {
    	echo "Selamat Pagi!";
	}

	//Konstanta
	define("Akbar", "Selamat datang di Polije!");
	echo "</br></br>".Akbar;

	//Fungsi
	function Akbar(){
		echo "</br></br>".Akbar." Dua";
	}

	Akbar();
    echo "</center>";
?>
       
        </body>
      
    </head>
</html>

