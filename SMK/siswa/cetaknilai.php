<?php
session_start(); // Start session nya
// Kita cek apakah user sudah login atau belum
// Cek nya dengan cara cek apakah terdapat session username atau tidak
if( ! isset($_SESSION['username'])){ // Jika tidak ada session username berarti dia belum login
  header("location: ../index.php"); // Kita Redirect ke halaman index.php karena belum login
}
?>
<!doctype html>
<html lang="en">

<head>
    
</head>

<body>

    <!--================ Start Header Menu Area =================-->
    <!--================ End Header Menu Area =================-->

    <!--================Home Banner Area =================-->
    <style type="text/css">
	table{
		margin: 30px auto;
		border-collapse: collapse;
    }
    table th{
        text-align: center;
    }
    table td{
        text-align: left;
    }
    .c{
        border: 1px solid #3c3c3c;
        padding: 5px 6px;
    }
    .d{
        border: 1px solid #3c3c3c;
        padding: 5px 20px;
    }
    .e{
        border: 1px solid #3c3c3c;
        padding: 5px 25px;
    }
    .f{
        border: 1px solid #3c3c3c;
        padding: 5px 100px;
    }
    .g{
        border: 1px solid #3c3c3c;
        padding: 5px 20px;
    }
    .h{
        border: 1px solid #3c3c3c;
        padding: 5px 25px;
    }
	</style>
    <!--================End Home Banner Area =================-->

    <?php
    header("Content-type: application/vnd-ms-excel"); 
    header("Content-Disposition: attachment; filename=nilai.xls");
    ?>
                <center><h3>Nilai</h3></center>
                    <table border="1">
                    <tr>
                        <th class="c">Nama</th>
                        <th class="e">Nilai UH</th>
                        <th class="d">Nilai UTS</th>
                        <th class="f">Nilai UAS</th>
                        <th class="g">Nilai Sikap</th>
                        
                    </tr>
                    <?php
                        include 'koneksi.php';
                        $nis = ['nis'];
                        $data = mysqli_query($koneksi,"select * from tb_nilai where nis = '$nis'");
                        while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                        <td class="c"><?php echo $d['nama'] ?></td>
                        <td class="e"><?php echo $d['nilai_ulgn_harian']; ?></td>
                        <td class="d"><?php echo $d['nilai_uts']; ?></td>
                        <td class="f"><?php echo $d['nilai_uas']; ?></td>
                        <td class="g"><?php echo $d['nilai_sikap']; ?></td>
                        
                    </tr>
                    <?php
                    }
                    ?>
                </table>
			</div>
		</div>
    </div>
	</body>
	</html>