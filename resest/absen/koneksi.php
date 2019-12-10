<?php
$conn = new mysqli("localhost","root","","absen");
if (!$conn) {
    die("connection failed".$conn->connect_error());
}
?>