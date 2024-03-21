<?php

// koneksi database
$server = "localhost";
$user = "root";
$password = "";
$database = "preflight";

// buat koneksinya 
$koneksi = mysqli_connect($server, $user, $password, $database) or die(mysqli_error($koneksi));

// Query untuk mendapatkan data dari tabel
$sql = "SELECT id, pilihan FROM prepos";
$result = $koneksi->query($sql);
