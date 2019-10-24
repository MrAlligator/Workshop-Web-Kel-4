<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data Siswa.xls");
?>
<h3>Data Siswa</h3>
    
<table border="1" cellpadding="5">
<tr>
    <th>No</th>
    <th>NIS</th>
    <th>Nama</th>
    <th>Jenis Kelamin</th>
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
    echo "<td>".$data['telp']."</td>";
    echo "<td>".$data['alamat']."</td>";
    echo "</tr>";
    
    $no++;
}
?>
</table>