<?php
include('../config.php');

if (isset($_POST['submit'])) {

  $id = $_POST['_id'];
  $deskripsi  = $_POST['editor1'];
  $now        = date("Y/m/d h:i:s");
  // UPDATE t_artikel SET title = '$judul', description = '$deskripsi', image = '$newfilename' WHERE id_artikel = $id"
  $query = mysqli_query($mysqli, "UPDATE t_desc_donasi SET description = '$deskripsi' WHERE id_desc_donasi = $id");

  if ($query) {
    header("location: ../admin?page=donasi");
  } else {
    echo 'Data gagal diinput. Silahkan coba lagi <a href="../admin?page=donasi">Di sini</a>';
  }

} else {
  header("location: ../admin?page=donasi", true, 200);
}
