<?php
include('../config.php');

$id = $_GET['delete_id'];
$query = mysqli_query($mysqli, "delete from t_kegiatan where id_kegiatan = $id");
// $query = true;
if($query) {
    header("location: /admin/index.php?page=list-kegiatan");
} else {
    header("location: /admin/index.php?page=list-kegiatan");  
}
?>