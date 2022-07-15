<?php
// Create database connection using config file
include_once("../config.php");

  // query desc alamat
  if ($result = $mysqli->query("SELECT * FROM t_alamat ORDER BY id_alamat DESC LIMIT 1")) {
  }

?>

<section class="section">
  <div class="section-header">
    <h1>Ubah Alamat</h1>
  </div>

  <div class="section-body">

    <?php
    while ($d = mysqli_fetch_array($result)) {
    ?>
      <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
          <div class="card">
            <form action="core/alamat_act.php?id=<?php echo $d['id_alamat'] ?>" enctype="multipart/form-data" method="post">
              <div class="card-header">
                <h4>Alamat</h4>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label>Judul</label>
                  <input name="alamat" type="text" class="form-control" required="" placeholder="Alamat" value="<?php echo $d['alamat'] ?>">
                  <input name="_id" type="hidden" class="form-control" required="" value="<?php echo $d['id_alamat'] ?>">
                </div>
                <div class="form-group">
                  <label>Link Google Maps</label>
                  <input name="linkmaps" type="text" class="form-control" required="" value="<?php echo $d['link_maps'] ?>">
                </div>
              </div>
              <div class="card-footer text-right">
                <input type="submit" value="Submit" name="submit" class="btn btn-primary">
              </div>
            </form>
          </div>
        </div>
      </div>
    <?php
    }
    ?>
  </div>
</section>