<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD PHP dan MySQLi</title>
</head>
<body>
<h2>CRUD data Siswa</h2>
	<br/>
	<a href="tambah.php">+ TAMBAH MAHASISWA</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>NIS</th>
			<th>Jenis Kelamin</th>
			<th>Agama</th>
			<th>Tempat Lahir</th>
			<th>Tanggal Lahir</th>
			<th>Alamat</th>
			<th>No. Telepon</th>
			<th>Password</th>
			<th>OPSI</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from tb_siswa");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama_siswa']; ?></td>
				<td><?php echo $d['nis']; ?></td>
				<td><?php echo $d['jk_siswa']; ?></td>
				<td><?php echo $d['agama_siswa']; ?></td>
				<td><?php echo $d['tmptlahir_siswa']; ?></td>
				<td><?php echo $d['tgllahir_siswa']; ?></td>
				<td><?php echo $d['alamat_siswa']; ?></td>
				<td><?php echo $d['telp_siswa']; ?></td>
				<td><?php echo $d['password']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>