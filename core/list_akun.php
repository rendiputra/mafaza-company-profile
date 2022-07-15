<?php

// Create database connection using config file
include_once("../config.php");

// query desc profile
if ($result = $mysqli->query("SELECT * FROM users ORDER BY id_users DESC")) {
}
?>

<section class="section">
  <div class="section-header">
    <h1>Kelola Akun</h1>
  </div>

  <div class="section-body">

    <div class="row">
      <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
          <div class="card-header">
            <h4>List akun</h4>
          </div>
          <div class="card-body">
            <a href="/admin?page=buat-akun" class="btn btn-primary mb-3">Tambah Akun Baru</a>
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
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
                    echo "<td>" . substr($d['nama'], 0,  50) . "</td>";
                    echo "<td>" . substr($d['email'], 0,  80) . "</td>";
                    echo "<td>" . substr($d['password'], 0,  20) . "...</td>";
                    echo '<td> <a href="/admin?page=update-akun&update_id=' . $d['id_users'] . '" class="btn btn-info mr-1 mt-1">Update</a><a href="/core/delete_users_act.php?page=delete-akun&delete_id=' . $d['id_users'] . '" class="btn btn-danger">Delete</a> </td>';
                    echo '</tr>';
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>