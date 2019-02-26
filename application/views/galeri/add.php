    <div class="main-panel">
        <div class="content-wrapper">
           <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Submit Announcement</h4>
                 <?php echo form_open_multipart('galeri/add');?>
                     <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Link</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="link" />
                          </div>
                        </div>
                      </div>
                       <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label" >Thumbnail</label>
                          <div class="col-sm-9">
                            <input type="file" class="form-control dropify" data-height="100" name="foto"/>
                          </div>
                        </div>
                      </div>
                   <label class="col-sm-3 col-form-label">Content : </label>
                     <textarea class="form-control" id="ckeditor" height="800px"  rows="8" name="isi"></textarea>
                    </div>
                      <button type="submit" class="btn btn-outline-info btn-fw float-right m-3">
                          <i class="mdi mdi-upload"></i>Upload</button>
                                <?= $error?>
                     </div>
                  </form>
                </div>
              </div>
            </div>
