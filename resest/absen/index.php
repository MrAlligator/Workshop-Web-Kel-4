<?php
//mengambil koneksi dari koneksi.php
include 'koneksi.php';
//mengambil value dari nim table siswa di tampilkan dalam bentuk checkbox
$sql="SELECT nim,nama FROM siswa";
$result = $conn->query($sql);
if ($result->num_rows>0) {
 echo "<form action='' method='get'>";
 $no = 0;
 while ($row = $result->fetch_assoc()) {
  echo $row['nim']." ".$row['nama']."<input type='checkbox' name='nim[]' value='".$row['nim']."'/><br/>";
  $no++;
 }
 echo "<input type='submit' name='submit'/></form>";
}
//proses memasukkan absensi
if (isset($_GET['submit'])) {
 $date = date("Y-m-d");
 echo $date."<br/>";
 $ket = 1;
 foreach ($_GET['nim'] as $nim) {
  $insert = "insert into absen values('".$nim."','".$ket."','".$date."')";
  if ($conn->query($insert)===TRUE) {
  }
  else{
   echo "error".$insert."<br/>".$conn->error;
  }
 }
}
//menutup koneksi
$conn->close();
?>