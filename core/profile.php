<?php
// Create database connection using config file
include_once("../config.php");

  // query desc profile
  if ($result = $mysqli->query("SELECT * FROM t_desc_profile ORDER BY id_desc_profile DESC LIMIT 1")) {
  }

?>

<section class="section">
  <div class="section-header">
    <h1>Ubah Deskripsi Profile</h1>
  </div>

  <div class="section-body">

    <?php
    while ($d = mysqli_fetch_array($result)) {
    ?>
      <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
          <div class="card">
            <form action="core/profile_act.php?id=<?php echo $d['id_desc_profile'] ?>" enctype="multipart/form-data" method="post">
              <div class="card-header">
                <h4>Deskripsi Profile</h4>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label>Judul</label>
                  <input name="judul" type="text" class="form-control" required="" placeholder="Judul Profile" value="<?php echo $d['title'] ?>">
                  <input name="_id" type="hidden" class="form-control" required="" value="<?php echo $d['id_desc_profile'] ?>">
                </div>
                <div class="form-group">
                  <label>Deskripsi profile</label>
                  <textarea name="editor1" id="editor1" class="form-control" required="" >
                  <?php echo $d['description'] ?>
                </textarea>
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