<?php
$servername = "localhost";
$database = "db_mafaza";
$username = "root";
$password = "";
 
$mysqli = new mysqli($servername, $username, $password ,$database);
// check connection to database
if ($mysqli->connect_errno) {
    die("Connection failed: " . mysqli_connect_error());
    exit();
}

// $mysqli -> close();
