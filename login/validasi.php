<?php
include '../config.php';
 
session_start();

if (isset($_SESSION['username'])) {

} else{
  if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hash = password_hash($password, PASSWORD_DEFAULT);

    $result = $mysqli->query("SELECT * FROM users WHERE email='$email' limit 1");
    if ($result->num_rows > 0) {
      $row = mysqli_fetch_assoc($result);
      if (password_verify($password, $row['password'])) {
        session_start();
        $_SESSION['nama'];
        $_SESSION['email'];
        $_SESSION['nama'] = $row['nama'];
        $_SESSION['email']  = $row['email'];
        header('location: /admin');
      } else {
        header('location: /login');
      }
    }
    
    
  }else{
    header('location: /login');
  }
}