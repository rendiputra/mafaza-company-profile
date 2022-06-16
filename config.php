<?php
$servername = "localhost";
$database = "db_mafaza";
$username = "root";
$password = "";
 
// untuk tulisan bercetak tebal silakan sesuaikan dengan detail database Anda
// membuat koneksi
$mysqli = new mysqli($servername, $username, $password ,$database);
// mengecek koneksi
if ($mysqli->connect_errno) {
    die("Connection failed: " . mysqli_connect_error());
    exit();
}

// $mysqli -> close();