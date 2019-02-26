
    <div class="main-panel">
        <div class="content-wrapper">
          <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
          <?php if ($this->session->flashdata('flash')):?>
          <?php endif ?>
            <div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <div id="overlay"></div>
                  <div id="frame" >
                    <img id="main"  src="" alt="" />
                  </div>
                  <h4 class="card-title"> News today 
                  <a href="<?= site_url("Galeri/add");?>" class="btn btn-outline-primary btn-fw float-right">
                      <i class="mdi mdi-file-document"></i>Submit
                    </a>
                        </h4>
                        <br>
                  <div class="table-responsive">
                    <table class="table table-secondary" id="mydata">
                      <thead>
                        <tr>
                          <th>
                            No
                          </th>
                          <th>
                            Thumbnail
                          </th>
                          <th>
                            Tanggal
                          </th>
                          <th>
                            Link
                          </th>
                          <th>
                            Tindakan
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i=1; foreach ($content as $p) :?>
                        <tr class="bg-secondary" id="image">
                          <td>
                            <?= $i++ ?>
                          </td>
                          <td>
                              <img src="<?= base_url();?>assets/image/galeri/<?= $p->gambar ?>">
                          </td>
                          <td>
                            <?= $p->tanggal ?>
                          </td>
                          <td>
                            <?= $p->link ?>
                          </td>
                          <td>
                        <a href="<?= site_url("galeri/edit/").$p->id;?>" class="btn btn-icons btn-rounded btn-outline-success">
                          <i class="fas fa-paint-brush"></i> 
                        </a>
                        <a href="<?= site_url("galeri/delete/").$p->id;?>"  class="btn btn-icons btn-rounded btn-outline-danger data-hapus">
                          <i class="fas fa-trash-alt"></i> 
                        </a>
                          </td>
                        </tr>
                      <?php endforeach ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>