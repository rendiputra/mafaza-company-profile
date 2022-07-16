<?php
// Create database connection using config file
include_once("../config.php");

if (isset($_GET['update_id'])){
  $id = $_GET['update_id'];
  
  // query desc profile
  if ($result = $mysqli->query("SELECT * FROM t_artikel where id_artikel = $id limit 1")) {

  }
} else {
  header("location: /admin?page=list-artikel");
}
?>

<section class="section">
  <div class="section-header">
    <h1>Artikel</h1>
  </div>

  <div class="section-body">

  <?php
    while ($d = mysqli_fetch_array($result)) {
  ?>
    <div class="row">
      <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
          <form action="/core/update_artikel_act.php?id=<?php echo $d['id_artikel'] ?>" enctype="multipart/form-data" method="post">
            <div class="card-header">
              <h4>Buat Artikel Baru</h4>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label>Judul</label>
                <input name="judul" type="text" class="form-control" required="" value="<?php echo $d['title'] ?>">
                <input name="_id" type="hidden" class="form-control" required="" value="<?php echo $d['id_artikel'] ?>">
                <input name="_tempimg" type="hidden" class="form-control" required="" value="<?php echo $d['image'] ?>">
              </div>
              <div class="form-group">
                <label>Gambar</label>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="customFile" name="image" value="<?php echo $d['image'] ?>">
                  <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
              </div>
              <div class="form-group">
                <label>Deskripsi Artikel</label>
                <textarea name="editor1" id="editor1" class="form-control" required="">
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


