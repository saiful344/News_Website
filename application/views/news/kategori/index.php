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
                            Nama
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i=1; foreach ($content as $b): ?>
                        <tr class="table-secondary">
                          <td>
                           <?= $i++ ?>
                          </td>
                          <td>
                           <?= $b->nama ?>
                          </td>
                          <td>
                        <a href="<?= site_url("News/edit/").$b->id;?>" class="btn btn-icons btn-rounded btn-outline-success">
                          <i class="mdi mdi-cloud-download"></i>
                        </a>
                       <a href="<?= site_url("News/delete/").$b->id;?>" class="btn btn-icons btn-rounded btn-outline-warning">
                          <i class="mdi mdi-map-marker"></i>
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