<?php

// Create database connection using config file
include_once("../config.php");

// query desc profile
if ($result = $mysqli->query("SELECT * FROM t_contact_us ORDER BY id_contact_us DESC")) {
}
?>

<section class="section">
  <div class="section-header">
    <h1>Contact Us</h1>
  </div>

  <div class="section-body">

    <div class="row">
      <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
          <div class="card-header">
            <h4>List Contact Us</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">email</th>
                    <th scope="col">subject</th>
                    <th scope="col">message</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  // fetch data
                  $no = 1;
                  while ($d = mysqli_fetch_array($result)) {
                    $date = date_create($d['created_at']);
                    echo '<tr>';
                    echo '<th scope="row">' . $no++ . '</th>';
                    echo "<td>" . $d['nama'] . "</td>";
                    echo "<td>" . $d['email'] . "</td>";
                    echo "<td>" . $d['subject'] . "</td>";
                    echo "<td>" . $d['message'] . "</td>";
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