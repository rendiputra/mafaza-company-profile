<?php

// Create database connection using config file
include_once("../config.php");

// query desc profile
if ($result = $mysqli->query("SELECT * FROM t_kegiatan ORDER BY id_kegiatan DESC")) {
}
?>

<section class="section">
  <div class="section-header">
    <h1>Kegiatan</h1>
  </div>

  <div class="section-body">

    <div class="row">
      <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
          <form action="buat_kegiatan_act.php" enctype="multipart/form-data" method="post">
            <div class="card-header">
              <h4>List kegiatan</h4>
            </div>
            <div class="card-body">
              <a href="/admin?page=buat-kegiatan" class="btn btn-primary mb-3">Tambah Kegiatan Baru</a>
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Judul</th>
                      <th scope="col">Desc</th>
                      <th scope="col">Badge</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    // fetch data
                    $no = 1;
                    while ($d = mysqli_fetch_array($result)) {
                      echo '<tr>';
                      echo '<th scope="row">' . $no++ . '</th>';
                      echo "<td>" . substr($d['title'], 0,  50) . "</td>";
                      echo "<td>" . substr($d['description'], 0,  80) . "</td>";
                      echo '<td><div class="icon">' . $d['badge'] . '</div></td>';
                      echo '<td> <a href="/admin?page=update-kegiatan&update_id=' . $d['id_kegiatan'] . '" class="btn btn-info mr-1 mt-1">Update</a><a href="/core/delete_kegiatan_act.php?page=delete-kegiatan&delete_id=' . $d['id_kegiatan'] . '" class="btn btn-danger">Delete</a> </td>';
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