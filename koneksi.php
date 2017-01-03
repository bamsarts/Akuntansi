<?php

// definisikan koneksi ke database
$server = "localhost";
$username = "root";
$password = "";
$database = "akuntan";

// Koneksi dan memilih database di server
$koneksi = new \mysqli($server,$username, null, $database) or die("Koneksi gagal");
//mysql_select_db($database) or die("Database tidak bisa dibuka");

?>
