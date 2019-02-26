    <div class="main-panel">
        <div class="content-wrapper">
           <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Submit News</h4>
                 <form action="" method="post" enctype="multipart/form-data">
                 <input type="hidden" name="id" value="<?= $content['id'] ?>">
                 <input type="hidden" name="old" value="<?= $content['gambar'] ?>">
                     <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Title</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" value="<?= $content['judul'] ?>" name="judul" />
                          </div>
                        </div>
                      </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label" >Thumbnail</label>
                          <div class="col-sm-9">
                            <input type="file" class="form-control" name="foto"/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Kategory</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="kategori" value="<?= $content['kategori'] ?>">
                              <option>--choice--</option>
                              <option>Female</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label" name="date">Date</label>
                          <div class="col-sm-9">
                            <input class="form-control" type="date" name="tanggal" placeholder="dd/mm/yyyy" value="<?= $content['tgl_b'] ?>" />
                          </div>
                        </div>
                      </div>
                    </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Link</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="link" value="<?= $content['link'] ?>"/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div>
                   <label class="ml-5 col-sm-3 col-form-label">Contain of News</label>
                     <textarea class="form-control" id="ckeditor" height="800px"  rows="8" name="isi"><?= $content['isi'] ?></textarea>
                      <button type="submit" class="btn btn-outline-info btn-fw float-right m-3">
                          <i class="mdi mdi-upload"></i>Upload</button>
                          <?= $error ?>
                     </div>
                  </form>
                </div>
              </div>
            </div>
