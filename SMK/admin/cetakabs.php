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
    header("Content-Disposition: attachment; filename=Data Absensi.xls");
    ?>
                <center><h3>Absensi Siswa</h3></center>
                    <table border="1">
                    <tr>
                        <th class="c">No</th>
                        <th class="e">Tanggal</th>
                        <th class="d">NIS</th>
                        <th class="f">Nama</th>
                        <th class="g">Kelas</th>
                        <th class="h">Keterangan</th>
                    </tr>
                    <?php
                        include 'koneksi.php';
                        $tgl = date("Y-m-d");
                        $no = 1;
                        $data = mysqli_query($koneksi,"select * from tb_absen where tgl_absen = '$tgl'");
                        while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                        <td class="c"><?php echo $no++; ?></td>
                        <td class="e"><?php echo $d['tgl_absen']; ?></td>
                        <td class="d"><?php echo $d['nisabsen_siswa']; ?></td>
                        <td class="f"><?php echo $d['namaabsen_siswa']; ?></td>
                        <td class="g"><?php echo $d['kelasabsen_siswa']; ?></td>
                        <td class="h"><?php echo $d['ket']; ?></td>
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