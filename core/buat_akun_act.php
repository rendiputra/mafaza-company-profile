<?php
include('../config.php');

if (isset($_POST['submit'])) {

  $nama      = $_POST['nama'];
  $email      = $_POST['email'];
  $password1      = $_POST['password1'];
  $password2      = $_POST['password2'];
  $hash      = password_hash($_POST['password2'], PASSWORD_DEFAULT);
  $now        = date("Y/m/d h:i:s");

  if ($password1 != $password2) {
    header("location: ../admin?page=buat-akun", true, 200);
  } else {
    $query = mysqli_query($mysqli, "INSERT INTO users (id_users, nama, email, password, created_at) VALUES (NULL, '$nama', '$email', '$hash', '$now')");

    if ($query) {
      header("location: /admin?page=list-akun&status=sukses");
    } else {
      header("location: /admin?page=list-akun&status=gagal");
    }
  }
} else {
  header("location: /admin?page=buat-akun&status=gagal", true, 200);
}
