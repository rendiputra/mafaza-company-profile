<?php
include('../config.php');

// contact us
if($_POST['submit']){
  $name      = $_POST['name'];
  $email     = $_POST['email'];
  $subject   = $_POST['subject'];
  $message   = $_POST['message'];
  $now       = date("Y/m/d h:i:s");

  $query = mysqli_query($mysqli, "INSERT INTO t_contact_us (id_contact_us, nama, email, subject, message, created_at) VALUES (NULL, '$name', '$email', '$subject', '$message', '$now')");

  if ($query) {
    header("location: /");
  } else {
    header("location: /");
  }
} else {
  header("location: /");
}