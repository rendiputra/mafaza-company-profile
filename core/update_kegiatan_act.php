<?php
include('../config.php');

if (isset($_POST['submit'])) {

  $id = $_POST['_id'];
  $judul      = $_POST['judul'];
  $badge      = $_POST['badge'];
  $deskripsi  = $_POST['editor1'];
  $now        = date("Y/m/d h:i:s");
  // UPDATE t_artikel SET title = '$judul', description = '$deskripsi', image = '$newfilename' WHERE id_artikel = $id"
  $query = mysqli_query($mysqli, "UPDATE t_kegiatan SET title = '$judul', description = '$deskripsi', badge = '$badge' WHERE id_kegiatan = $id");

  if ($query) {
    header("location: ../admin?page=list-kegiatan");
  } else {
    echo 'Data gagal diinput. Silahkan coba lagi <a href="../admin?page=buat-kegiatan">Di sini</a>';
  }

} else {
  header("location: ../admin?page=buat-kegiatan", true, 200);
}
