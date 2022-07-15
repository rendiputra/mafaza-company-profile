<?php
include('../config.php');

$id = $_GET['delete_id'];
$query = mysqli_query($mysqli, "delete from t_artikel where id_artikel = $id");
// $query = true;
if($query) {
    // echo 'Data berhasil disimpan. Klik <a href="input.html">Di sini</a> untuk input data kembali';
    header("location: /admin/index.php?page=list-artikel");
} else {
    header("location: /admin/index.php?page=list-artikel");  
}
?>