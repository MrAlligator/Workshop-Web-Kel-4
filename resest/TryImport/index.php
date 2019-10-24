<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Import Data dengan PHP</title>

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
</head>

<body>
    <nav class="navbar navbar-inverse" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
        <a class="navbar-brand" href="#" style="color: white;"><b>Import Data dengan PHP</b></a>
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
    <a href="form.php" class="btn btn-success pull-right">
        <span class="glyphicon glyphicon-upload"></span> Import Data
    </a>
</br>
</br>
    <a href="proses.php" class="btn btn-success pull-right">
        <span class="glyphicon glyphicon-download"></span> Export Data
    </a>
    
    <h3>Data Hasil Import</h3>
    
    <hr>
    
    <div class="table-responsive">
        <table class="table table-bordered">
        <tr>
            <th>NIS</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Telepon</th>
            <th>Alamat</th>
        </tr>
        <?php
        include "koneksi.php";
        
          $sql = $pdo->prepare("SELECT * FROM tb_siswa");
        $sql->execute();
        
        $no = 1;
        while($data = $sql->fetch()){
            echo "<tr>";
            echo "<td>".$no."</td>";
            echo "<td>".$data['nis']."</td>";
            echo "<td>".$data['nama']."</td>";
            echo "<td>".$data['jk']."</td>";
            echo "<td>".$data['agama']."</td>";
            echo "<td>".$data['tmptlahir']."</td>";
            echo "<td>".$data['tgllahir']."</td>";
            echo "<td>".$data['telp']."</td>";
            echo "<td>".$data['alamat']."</td>";
            echo "</tr>";
            
            $no++;
        }
        ?>
        </table>
    </div>
    </div>
</body>
</html>




