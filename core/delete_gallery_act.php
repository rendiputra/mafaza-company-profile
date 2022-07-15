<?php
include('../config.php');

$id = $_GET['delete_id'];
$query = mysqli_query($mysqli, "DELETE from t_gallery where id_gallery = $id");
// $query = true;
if($query) {
    // echo 'Data berhasil disimpan. Klik <a href="input.html">Di sini</a> untuk input data kembali';
    header("location: /admin/index.php?page=list-gallery");
} else {
    header("location: /admin/index.php?page=list-gallery");  
}
?>