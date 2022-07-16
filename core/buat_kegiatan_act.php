<?php
include('../config.php');

if (isset($_POST['submit'])) {

  $judul      = $_POST['judul'];
  $badge      = $_POST['badge'];
  $deskripsi  = $_POST['editor1'];
  $now        = date("Y/m/d h:i:s");

  $query = mysqli_query($mysqli, "INSERT INTO t_kegiatan (id_kegiatan, title, description, badge, created_at) VALUES (NULL, '$judul', '$deskripsi', '$badge', '$now')");

  if ($query) {
    header("location: ../admin?page=list-kegiatan");
  } else {
    echo 'Data gagal diinput. Silahkan coba lagi <a href="../admin?page=buat-kegiatan">Di sini</a>';
  }

} else {
  header("location: ../admin?page=buat-kegiatan", true, 200);
}
