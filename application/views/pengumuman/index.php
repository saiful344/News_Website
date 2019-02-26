    <div class="main-panel">
        <div class="content-wrapper">
           <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div> 
           <?php if ($this->session->flashdata('flash')):?>
          <?php endif ?>
            <div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"> News today 
                  <a href="<?= site_url("pengumuman/add");?>" class="btn btn-outline-primary btn-fw float-right">
                      <i class="mdi mdi-file-document"></i>Submit
                    </a>
                        </h4>
                        <br>
                  <div class="table-responsive">
                    <table class="table table-striped table-bordered">
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
                            Number
                          </th>
                          <th>
                            Tindakan
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i=1; foreach ($content as $p) :?>
                        <tr class="table-secondary">
                          <td>
                            <?= $i++ ?>
                          </td>
                          <td>
                              <img src="<?= base_url();?>assets/image/pengumuman/<?= $p->gambar ?>">
                          </td>
                          <td>
                            <?= $p->tanggal ?>
                          </td>
                          <td>
                            <?= $p->no_p ?>
                          </td>
                          <td>
                        <a href="<?= site_url("Pengumuman/edit/").$p->id;?>" class="btn btn-icons btn-rounded btn-outline-success">
                            <i class="fas fa-paint-brush"></i>
                       </a>
                        <a href="<?= site_url("Pengumuman/delete/").$p->id;?>" class="btn btn-icons btn-rounded btn-outline-danger data-hapus">
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