<section class="section">
  <div class="section-header">
    <h1>kegiatan</h1>
  </div>

  <div class="section-body">

    <div class="row">
      <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
          <form action="core/buat_kegiatan_act.php" enctype="multipart/form-data" method="post">
            <div class="card-header">
              <h4>Buat Kegiatan Baru</h4>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label>Judul</label>
                <input name="judul" type="text" class="form-control" required="" placeholder="Judul kegiatan">
              </div>
              <div class="form-group">
                <label>Badge</label>
                <input name="badge" type="text" class="form-control" required="" placeholder='<i class="bi bi-arrow-left"></i>'>
                Informasi badge bisa didapat dari: <a href="https://icons.getbootstrap.com/" class="link-info" target="_blank">Icon Bootstrap</a> | 
                <a href="https://boxicons.com/" class="link-info" target="_blank">Boxicons</a>
              </div>
              <div class="form-group">
                <label>Deskripsi kegiatan</label>
                <textarea name="editor1" id="editor1" class="form-control" required="" placeholder="Judul kegiatan">

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
  </div>
</section>


