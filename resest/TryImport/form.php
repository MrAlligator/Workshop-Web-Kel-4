<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Import Data Excel dengan PHP</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        #loading{
    background: whitesmoke;
    position: absolute;
    top: 140px;
    left: 82px;
    padding: 5px 10px;
    border: 1px solid #ccc;
    }
    </style>
    
    <script src="js/jquery.min.js"></script>
    
    <script>
    $(document).ready(function(){
        $("#kosong").hide();
    });
    </script>
</head>
<body>
    <nav class="navbar navbar-inverse" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
        <a class="navbar-brand" href="#" style="color: white;"><b>Import Data Excel dengan PHP</b></a>
        </div>
        <p class="navbar-text navbar-right hidden-xs" style="color: white;padding-right: 10px;">
        FOLLOW US ON  
        <a target="_blank" style="background: #3b5998; padding: 0 5px; border-radius: 4px; color: #f7f7f7; text-decoration: none;" href="https://www.facebook.com/mynotescode">Facebook</a> 
        <a target="_blank" style="background: #00aced; padding: 0 5px; border-radius: 4px; color: #ffffff; text-decoration: none;" href="https://twitter.com/code_notes">Twitter</a> 
        <a target="_blank" style="background: #d34836; padding: 0 5px; border-radius: 4px; color: #ffffff; text-decoration: none;" href="https://plus.google.com/118319575543333993544">Google+</a>
        </p>
    </div>
    </nav>
    
    <div style="padding: 0 15px;">
    <a href="index.php" class="btn btn-danger pull-right">
        <span class="glyphicon glyphicon-remove"></span> Cancel
    </a>
    
    <h3>Form Import Data</h3>
    <hr>
    
    <form method="post" action="" enctype="multipart/form-data">
        <a href="Format.xlsx" class="btn btn-default">
        <span class="glyphicon glyphicon-download"></span>
        Download Format
        </a><br><br>
        
        <input type="file" name="file" class="pull-left">
        
        <button type="submit" name="preview" class="btn btn-success btn-sm">
        <span class="glyphicon glyphicon-eye-open"></span> Preview
        </button>
    </form>
    
    <hr>
    
    <?php
    if(isset($_POST['preview'])){
        $nama_file_baru = 'data.xlsx';
        
        if(is_file('tmp/'.$nama_file_baru))
        unlink('tmp/'.$nama_file_baru);
        
        $ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        $tmp_file = $_FILES['file']['tmp_name'];

        if($ext == "xlsx"){
        move_uploaded_file($tmp_file, 'tmp/'.$nama_file_baru);
        
        require_once 'PHPExcel/PHPExcel.php';
        
        $excelreader = new PHPExcel_Reader_Excel2007();
        $loadexcel = $excelreader->load('tmp/'.$nama_file_baru); 
        $sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);
        
        echo "<form method='post' action='import.php'>";
        
        echo "<div class='alert alert-danger' id='kosong'>
        Semua data belum diisi, Ada <span id='jumlah_kosong'></span> data yang belum diisi.
        </div>";
        
        echo "<table class='table table-bordered'>
        <tr>
            <th colspan='5' class='text-center'>Preview Data</th>
        </tr>
        <tr>
            <th>NIS</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Telepon</th>
            <th>Alamat</th>
        </tr>";
        
        $numrow = 1;
        $kosong = 0;
        foreach($sheet as $row){ 
            $nis = $row['A'];
            $nama = $row['B'];
            $jk = $row['C'];
            $agama = $row ['D'];
            $tmptlahir = $row ['E'];
            $tgllahir = $row ['F'];
            $telp = $row['G'];
            $alamat = $row['H']; 
            
            if($nis == "" && $nama == "" && $jk == "" && $agama == "" && $tmptlahir == "" && $tgllahir == "" && $telp == "" && $alamat == "")
            continue; 
            if($numrow > 1){
                $nis_td = ( ! empty($nis))? "" : " style='background: #E07171;'"; // Jika NIS kosong, beri warna merah
                $nama_td = ( ! empty($nama))? "" : " style='background: #E07171;'"; // Jika Nama kosong, beri warna merah
                $jk_td = ( ! empty($jk))? "" : " style='background: #E07171;'"; // Jika Jenis Kelamin kosong, beri warna merah
                $agama_td = ( ! empty($agama))? "" : " style='background: #E07171;'";
                $tmptlahir_td = ( ! empty($tmptlahir))? "" : " style='background: #E07171;'";
                $tgllahir_td = ( ! empty($tgllahir))? "" : " style='background: #E07171;'";
                $telp_td = ( ! empty($telp))? "" : " style='background: #E07171;'";
                $alamat_td = ( ! empty($alamat))? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah
            
            if($nis == "" or $nama == "" or $jk == "" or $agama == "" or $tmptlahir == "" or $tgllahir == "" or $telp == "" or $alamat == ""){
                $kosong++; 
            }
            
            echo "<tr>";
            echo "<td".$nis_td.">".$nis."</td>";
            echo "<td".$nama_td.">".$nama."</td>";
            echo "<td".$jk_td.">".$jk."</td>";
            echo "<td".$agama_td.">".$agama."</td>";
            echo "<td".$tmptlahir_td.">".$tmptlahir."</td>";
            echo "<td".$tgllahir_td.">".$tgllahir."</td>";
            echo "<td".$telp_td.">".$telp."</td>";
            echo "<td".$alamat_td.">".$alamat."</td>";
            echo "</tr>";
            }
            
            $numrow++;
        }
        
        echo "</table>";
        
        if($kosong > 0){
        ?>  
            <script>
            $(document).ready(function(){
            $("#jumlah_kosong").html('<?php echo $kosong; ?>');
            
            $("#kosong").show(); // Munculkan alert validasi kosong
            });
            </script>
        <?php
          }else{ // Jika semua data sudah diisi
            echo "<hr>";
            
            echo "<button type='submit' name='import' class='btn btn-primary'><span class='glyphicon glyphicon-upload'></span> Import</button>";
        }
        
        echo "</form>";
        }else{ 
        echo "<div class='alert alert-danger'>
        Hanya File Excel 2007 (.xlsx) yang diperbolehkan
        </div>";
        }
    }
    ?>
    </div>
</body>
</html>