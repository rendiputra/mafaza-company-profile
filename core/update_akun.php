<?php
// Create database connection using config file
include_once("../config.php");

if (isset($_GET['update_id'])) {
  $id = $_GET['update_id'];

  // query desc profile
  if ($result = $mysqli->query("SELECT * FROM users where id_users = $id")) {
  }
} else {
  header("location: /admin?page=list-akun");
}
?>

<section class="section">
  <div class="section-header">
    <h1>Kelola Akun</h1>
  </div>

  <div class="section-body">
    <?php
    while ($d = mysqli_fetch_array($result)) {
    ?>
      <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
          <div class="card">
            <form action="/core/update_akun_act.php?id=<?php echo $d['id_users'] ?>" enctype="multipart/form-data" method="post">
              <div class="card-header">
                <h4>Buat Akun Baru</h4>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label>Nama</label>
                  <input name="_id" type="hidden" class="form-control" required="" value="<?php echo $d['id_users'] ?>">
                  <input name="nama" type="text" class="form-control" required="" placeholder="Nama" value="<?php echo $d['nama'] ?>">
                  <div class="form-group">
                    <label>Email</label>
                    <input name="email" type="email" class="form-control" required="" placeholder="Nama" value="<?php echo $d['email'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Password Lama</label>
                    <input name="passwordlama" type="password" class="form-control" required="" placeholder="password lama">
                  </div>
                  <div class="form-group">
                    <label>Password Baru</label>
                    <input name="password1" type="password" class="form-control" required="" placeholder="password baru">
                  </div>
                </div>
                <div class="form-group">
                  <label>Konfirmasi Password Baru</label>
                  <input name="password2" type="password" class="form-control" required="" placeholder="konfirmasi password baru">
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