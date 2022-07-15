<?php
include('../config.php');

if (isset($_POST['submit'])) {

  $deskripsi  = $_POST['editor1'];
  $now        = date("Y/m/d h:i:s");
  $id         = $_POST['_id'];
  $tmp_img    = $_POST['_tempimg'];

  $target_dir     = "../image/galeri/";
  $target_file    = $target_dir . basename($_FILES["image"]["name"]);
  $uploadOk       = 1;
  $imageFileType  = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
  $temp           = explode(".", $_FILES["image"]["name"]);
  $newfilename    = round(microtime(true)) . '.' . end($temp);
  $temp_img       = $_FILES['image']['name'];

  // echo var_dump($temp_img);
  // die;

  // Check if image file is a actual image or fake image
  if (isset($_POST["submit"])) {
    if (!$temp_img == "") {
      $check = getimagesize($_FILES["image"]["tmp_name"]);
      if ($check !== false) {
        $uploadOk = 1;
      } else {
        echo 1;
        $uploadOk = 0;
      }


      // Check if file already exists
      if (file_exists($target_file)) {
        echo 2;
        $uploadOk = 0;
      }

      // Check file size
      if ($_FILES["image"]["size"] > 2_000_000) {
        $uploadOk = 0;
        echo 3;
      }

      // Allow certain file formats
      if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
      ) {
        echo 4;
        $uploadOk = 0;
      }

      // Check if $uploadOk is set to 0 by an error
      if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
      } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_dir . $newfilename)) {
          $nama = htmlspecialchars(basename($_FILES["image"]["name"])) . date("Y/m/d h:i:s");
          $query = mysqli_query($mysqli, "UPDATE t_gallery SET description = '$deskripsi', image_path = '$newfilename' WHERE id_gallery = $id");

          if ($query) {
            header("location: ../admin?page=list-gallery");
          } else {
            echo 'Data gagal diinput. Silahkan coba lagi <a href="../admin?page=list-gallery">Di sini</a>';
          }
        } else {
          header("location: ../admin?page=list-gallery", true, 200);
        }
      }
    } else {
      $query = mysqli_query($mysqli, "UPDATE t_gallery SET description = '$deskripsi', image_path = '$tmp_img' WHERE id_gallery = $id");

      if ($query) {
        header("location: ../admin?page=list-gallery");
      } else {
        echo 'Data gagal diinput. Silahkan coba lagi <a href="../admin?page=list-gallery">Di sini</a>';
      }
    }
  }

  // $extension = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);

  // if ($extension == 'jpg' || $extension == 'jpeg' || $extension == 'png' || $extension == 'gif') {
  //   echo "File is image <br />";
  //   echo "File type = " . $extension;
  // } else {
  //   echo "File is not image";
  // }
}
