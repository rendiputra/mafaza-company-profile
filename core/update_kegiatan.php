<?php
// Create database connection using config file
include_once("../config.php");

if (isset($_GET['update_id'])) {
  $id = $_GET['update_id'];

  // query desc profile
  if ($result = $mysqli->query("SELECT * FROM t_kegiatan where id_kegiatan = $id")) {
  }
} else {
  header("location: /admin?page=list-kegiatan");
}
?>

<section class="section">
  <div class="section-header">
    <h1>kegiatan</h1>
  </div>

  <div class="section-body">

    <?php
    while ($d = mysqli_fetch_array($result)) {
    ?>
      <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
          <div class="card">
            <form action="/core/update_kegiatan_act.php?id=<?php echo $d['id_kegiatan'] ?>" enctype="multipart/form-data" method="post">
              <div class="card-header">
                <h4>Buat Kegiatan Baru</h4>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label>Judul</label>
                  <input name="judul" type="text" class="form-control" required="" placeholder="Judul kegiatan" value="<?php echo $d['title'] ?>">
                  <input name="_id" type="hidden" class="form-control" required="" value="<?php echo $d['id_kegiatan'] ?>">
                </div>
                <div class="form-group">
                  <label>Badge</label>
                  <input name="badge" type="text" class="form-control" required="" placeholder='<i class="bi bi-arrow-left"></i>' value='<?php echo $d["badge"] ?>'>
                  Informasi badge bisa didapat dari: <a href="https://icons.getbootstrap.com/" class="link-info" target="_blank">Icon Bootstrap</a> |
                  <a href="https://boxicons.com/" class="link-info" target="_blank">Boxicons</a>
                </div>
                <div class="form-group">
                  <label>Deskripsi kegiatan</label>
                  <textarea name="editor1" id="editor1" class="form-control" required="" placeholder="Judul kegiatan">
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