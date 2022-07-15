<?php

// Create database connection using config file
include_once("../config.php");

// query desc profile
if ($result = $mysqli->query("SELECT * FROM t_gallery ORDER BY id_gallery DESC")) {
}
?>

<section class="section">
  <div class="section-header">
    <h1>Galerry</h1>
  </div>

  <div class="section-body">

    <div class="row">
      <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
          <form action="buat_gallery_act.php" enctype="multipart/form-data" method="post">
            <div class="card-header">
              <h4>List Gallery</h4>
            </div>
            <div class="card-body">
              <a href="admin?page=buat-gallery" class="btn btn-primary mb-3">Tambah Foto Baru</a>
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Gambar</th>
                      <th scope="col">Desc</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    // fetch data
                    $no = 1;
                    while ($d = mysqli_fetch_array($result)) {
                      $date=date_create($d['created_at']);
                      echo '<tr>';
                      echo '<th scope="row">' . $no++ . '</th>';
                      echo '<td><img src="/image/galeri/' . $d['image_path'] .'" alt="' . $d['description'] . '" class="img-thumbnail" width="100"></td>';
                      echo "<td>" . substr($d['description'], 0,  50) . "</td>";
                      echo '<td> <a href="/admin?page=update-gallery&update_id=' . $d['id_gallery'] . '" class="btn btn-info mr-1 mt-1">Update</a><a href="../core/delete_gallery_act.php?delete_id=' . $d['id_gallery'] . '" class="btn btn-danger">Delete</a> </td>';
                      echo '</tr>';
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>