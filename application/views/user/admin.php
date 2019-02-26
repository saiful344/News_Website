      <div class="main-panel">
        <div class="content-wrapper">
           <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div> 
           <?php if ($this->session->flashdata('flash')):?>
          <?php endif ?>
          <div class="row">
            <div class="col-lg-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title text-primary">User<small>~admin</small>
                    <button id="dialog" class="btn btn-outline-primary btn-fw float-right" data-toggle="modal" data-target="#exampleModalCenter">
                      <i class="mdi mdi-file-document"></i>Submit
                    </button>
                  </h4>
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>
                            No
                          </th>
                          <th>
                            Profil
                          </th>
                          <th>
                            Username
                          </th>
                          <th>
                            Aktivitas
                          </th>
                          <th>
                            Gender
                          </th>
                          <th>
                            E-mail
                          </th>
                          <th>
                            Aksi
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i=1;foreach($content as $s) : ?>
                        <tr>
                          <td class="font-weight-medium">
                            <?= $i++ ?>
                          </td>
                          <td>
                            <?= $s->gambar ;?>
                          </td>
                           <td>
                            <?= $s->username ;?>
                          </td>
                          <td>
                            <div class="progress">
                              <div class="progress-bar bg-success progress-bar-striped" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                                aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td class="text-danger"> <?= $s->gender ;?>
                            <i class="mdi mdi-arrow-down"></i>
                          </td>
                          <td>
                           <?= $s->email ;?>
                          </td>
                          <td>
                          <td>
                          <a href="<?= site_url("Admin/edit/").$s->id;?>" class="btn btn-icons btn-rounded btn-outline-success">
                          <i class="mdi mdi-cloud-download"></i>
                          </a>
                          <a href="<?= site_url("Admin/hapus/").$s->id;?>" class="btn btn-icons btn-rounded btn-outline-warning">
                          <i class="mdi mdi-map-marker"></i>
                          </a>
                          </td>
                        </tr>
                        <?php endforeach ;?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">New admin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <?php echo form_open('Admin/add');?>
              <div class="modal-body">
               <div class="form-group">
                <label for="recipient-name" class="col-form-label">Usernmae:</label>
                <input type="text" class="form-control" id="recipient-name" name="username">
              </div>
              <div class="form-group">
                <label for="message-text" class="col-form-label">Password:</label>
                <input type="password" name="password" class="form-control" id="message-text">
              </div>
              <div class="form-group">
                <select name="level" class="form-control">
                  <option value="admin">Admin</option>
                  <option value="atasan">Pimpinan</option>
                </select>
              </div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary"><i class="fal fa-plus-circle"></i>Tambah</button>
              </div>
            </form>
            </div>
          </div>
        </div>
