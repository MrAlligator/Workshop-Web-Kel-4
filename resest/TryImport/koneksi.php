<?php
$host = '127.0.0.1'; // Nama hostnya
$username = 'root'; // Username
$password = ''; // Password (Isi jika menggunakan password)
$database = 'db_smk'; // Nama databasenya
// Koneksi ke MySQL dengan PDO
$pdo = new PDO('mysql:host='.$host.';dbname='.$database, $username, $password);
?>