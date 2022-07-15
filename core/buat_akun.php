<section class="section">
  <div class="section-header">
    <h1>Kelola Akun</h1>
  </div>

  <div class="section-body">

    <div class="row">
      <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
          <form action="core/buat_akun_act.php" enctype="multipart/form-data" method="post">
            <div class="card-header">
              <h4>Buat Akun Baru</h4>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label>Nama</label>
                <input name="nama" type="text" class="form-control" required="" placeholder="Nama">
              <div class="form-group">
                <label>Email</label>
                <input name="email" type="email" class="form-control" required="" placeholder="Nama">
              </div>
              <div class="form-group">
                <label>Password</label>
                <input name="password1" type="password" class="form-control" required="" placeholder="password">
              </div>
              </div>
              <div class="form-group">
                <label>Konfirmasi Password</label>
                <input name="password2" type="password" class="form-control" required="" placeholder="password">
              </div>
            </div>
            <div class="card-footer text-right">
              <input type="submit" value="Submit" name="submit" class="btn btn-primary">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>


