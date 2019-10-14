<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>CRUD DATA MAHASISWA</h2>
	<br/>
	<a href="crud.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA MAHASISWA</h3>

	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from tb_siswa where id='$id'");
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
					<td>NIS</td>
					<td><input type="text" name="nis" value="<?php echo $d['nis']; ?>"></td>
                </tr>
                <tr>
					<td>Jenis Kelamin</td>
					<td><input type="text" name="jenisKelamin" value="<?php echo $d['jenisKelamin']; ?>"></td>
                </tr>
                <tr>
					<td>Agama</td>
					<td><input type="text" name="agama" value="<?php echo $d['agama']; ?>"></td>
                </tr>
                <tr>
					<td>Tempat Lahir</td>
					<td><input type="text" name="tmptlahir" value="<?php echo $d['tmptlahir']; ?>"></td>
                </tr>
                <tr>
					<td>Tanggal Lahir</td>
					<td><input type="text" name="tanggal" value="<?php echo $d['tanggal']; ?>"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
                </tr>
                <tr>
					<td>No. Telepon</td>
					<td><input type="text" name="notelp" value="<?php echo $d['notelp']; ?>"></td>
                </tr>
                <tr>
					<td>Password</td>
					<td><input type="text" name="passwd" value="<?php echo $d['passwd']; ?>"></td>
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
</body>
</html>