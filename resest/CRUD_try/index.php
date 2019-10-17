<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Mahasiswa</title>
</head>
<body>
<table border="1">
		<tr>
			<th>NO</th>
			<th>Nama</th>
			<th>NIM</th>
			<th>Alamat</th>
			<th>OPSI</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from mahasiswa");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['nim']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
				<td>
					<button><a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a></button>
					<button><a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a></button>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>