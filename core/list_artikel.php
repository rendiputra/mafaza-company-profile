<?php

// Create database connection using config file
include_once("config.php");

// query desc profile
if ($result = $mysqli->query("SELECT * FROM t_artikel ORDER BY id_artikel DESC")) {
}
?>

<section class="section">
  <div class="section-header">
    <h1>Artikel</h1>
  </div>

  <div class="section-body">

    <div class="row">
      <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
          <form action="buat_artikel_act.php" enctype="multipart/form-data" method="post">
            <div class="card-header">
              <h4>List Artikel</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">


                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Judul</th>
                      <th scope="col">Desc</th>
                      <th scope="col">Tanggal</th>
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
                      echo "<td>" . substr($d['title'], 0,  50) . "</td>";
                      echo "<td>" . substr($d['description'], 0,  50) . "</td>";
                      echo '<td>' . date_format($date, "Y M d") . '</td>';
                      echo '<td> <a href="admin.php?page=update-artikel&update_id=' . $d['id_artikel'] . '" class="btn btn-info mr-1 mt-1">Update</a><a href="admin.php?page=delete-artikel&delete_id=' . $d['id_artikel'] . '" class="btn btn-danger">Delete</a> </td>';
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