<?php
include('../config.php');

if (isset($_POST['submit'])) {

  $id      = $_POST['_id'];
  $nama      = $_POST['nama'];
  $email      = $_POST['email'];
  $passwordlama      = $_POST['passwordlama'];
  $password1      = $_POST['password1'];
  $password2      = $_POST['password2'];
  $hash      = password_hash($_POST['password2'], PASSWORD_DEFAULT);
  $now        = date("Y/m/d h:i:s");

  $result = $mysqli->query("SELECT * FROM users WHERE email='$email' limit 1");
  if ($result->num_rows > 0) {
    $row = mysqli_fetch_assoc($result);
    if (password_verify($passwordlama, $row['password'])) {
      if ($password1 != $password2) {
        header("location: ../admin?page=list-akun&status=gagal", true, 200);
      } else {
        $query = mysqli_query($mysqli, "UPDATE users SET nama = '$nama', email = '$email', password = '$hash' WHERE id_users = '$id'");

        if ($query) {
          header("location: ../admin?page=list-akun&status=sukses");
        } else {
          header("location: ../admin?page=list-akun&status=gagal");
        }
      }
    }
  }
} else {
  header("location: ../admin?page=list-akun&status=gagal", true, 200);
}
