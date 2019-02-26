    <div class="main-panel">
        <div class="content-wrapper">
            <div class="col-lg-12 stretch-card">
               <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
                <?php if ($this->session->flashdata('flash')):?>
                <?php endif ?>
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"> News today 
                    <a href="<?= site_url("News/add");?>" class="btn btn-outline-primary btn-fw float-right">
                      <i class="mdi mdi-file-document"></i>Submit
                    </a>
                    </h4>
                  <br>
                  <div class="table-responsive">
                    <table class="table table-striped table-bordered" id="datatables">
                      <thead>
                        <tr>
                          <th>
                            No
                          </th>
                          <th>
                            Thumbnail
                          </th>
                          <th>
                            Judul
                          </th>
                          <th>
                            Kategori
                          </th>
                          <th>
                            Tanggal
                          </th>
                          <th>
                            Tindakan
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i=1; foreach ($berita as $b): ?>
                        <tr class="table-secondary">
                          <td>
                           <?= $i++ ?>
                          </td>
                          <td>
                           <img src="<?= base_url();?>assets/image/<?= $b->gambar ?>">
                          </td>
                          <td>
                            <?php 
                            $isi=$b->judul;
                            echo substr($isi,0,14),"..."
                            ?>
                          </td>
                          <td>
                           <?= $b->kategori ?>
                          </td>
                          <td>
                           <?= $b->tanggal ?>
                          </td>
                          <td>
                            <div>
                        <a href="<?= site_url("News/edit/").$b->id;?>" class="btn btn-icons btn-rounded btn-outline-success">
                           <i class="fas fa-paint-brush"></i>
                        </a>
                       <a href="<?= site_url("News/delete/").$b->id;?>" class="btn btn-icons btn-rounded btn-outline-danger data-hapus">
                          <i class="fas fa-trash-alt"></i>
                        </a>
                        </div>
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