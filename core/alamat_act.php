<?php
include('../config.php');

if (isset($_POST['submit'])) {

  $id = $_POST['_id'];
  $alamat  = $_POST['alamat'];
  $link_maps  = $_POST['linkmaps'];
  $now        = date("Y/m/d h:i:s");
  // UPDATE t_artikel SET title = '$judul', description = '$deskripsi', image = '$newfilename' WHERE id_artikel = $id"
  $query = mysqli_query($mysqli, "UPDATE t_alamat SET alamat = '$alamat', link_maps = '$link_maps' WHERE id_alamat = $id");

  if ($query) {
    header("location: ../admin?page=alamat");
  } else {
    echo 'Data gagal diinput. Silahkan coba lagi <a href="../admin?page=alamat">Di sini</a>';
  }

} else {
  header("location: ../admin?page=alamat", true, 200);
}
