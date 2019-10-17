<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data</title>
</head>
<body>
<h3>EDIT DATA MAHASISWA</h3>

<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi,"select * from mahasiswa where id='$id'");
while($d = mysqli_fetch_array($data)){
    ?>
    <form method="post" action="update.php">
        <table>
            <tr>			
                <td>Nama</td>
                <td>
                    <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                    <input type="text" name="nama" value="<?php echo $d['nama']; ?>">
                </td>
            </tr>
            <tr>
                <td>NIM</td>
                <td><input type="text" name="nim" value="<?php echo $d['nim']; ?>"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>		
        </table>
    </form>
    <?php 
}
?>
</br>
</br>
</br>
<button><a href="index.php">KEMBALI</a></button>
</body>
</html>