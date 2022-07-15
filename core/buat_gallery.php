<section class="section">
  <div class="section-header">
    <h1>Gallery</h1>
  </div>

  <div class="section-body">

    <div class="row">
      <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
          <form action="core/buat_gallery_act.php" enctype="multipart/form-data" method="post">
            <div class="card-header">
              <h4>Tambah Foto Baru</h4>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label>Gambar</label>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="customFile" name="image">
                  <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
              </div>
              <div class="form-group">
                <label>Deskripsi gambar</label>
                <textarea name="editor1" id="editor1" class="form-control" required="" placeholder="Judul artikel">

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


