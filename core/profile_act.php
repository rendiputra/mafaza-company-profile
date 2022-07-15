<?php
include('../config.php');

if (isset($_POST['submit'])) {

  $id = $_POST['_id'];
  $judul  = $_POST['judul'];
  $deskripsi  = $_POST['editor1'];
  $now        = date("Y/m/d h:i:s");
  // UPDATE t_artikel SET title = '$judul', description = '$deskripsi', image = '$newfilename' WHERE id_artikel = $id"
  $query = mysqli_query($mysqli, "UPDATE t_desc_profile SET title = '$judul', description = '$deskripsi' WHERE id_desc_profile = $id");

  if ($query) {
    header("location: ../admin?page=profile");
  } else {
    echo 'Data gagal diinput. Silahkan coba lagi <a href="../admin?page=profile">Di sini</a>';
  }

} else {
  header("location: ../admin?page=profile", true, 200);
}
