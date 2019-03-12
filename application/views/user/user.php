      <div class="main-panel">
        <div class="content-wrapper">
           <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div> 
           <?php if ($this->session->flashdata('flash')):?>
          <?php endif ?>
          <div class="row">
            <div class="col-lg-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title text-primary">User<small>~admin</small></h4>
                  <div class="table-responsive">
                    <table class="table table-bordered" id="mydata">
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
                            <img src="<?= base_url();?>assets/image/user/<?= $s->gambar ?>">
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
                          <?php if( $s->gender == "Male") : ?>
                          <td class="text-success"> <?= $s->gender ;?>
                            <i class="mdi mdi-arrow-up"></i> 
                          <?php else : ?>
                            <td class="text-primary"> <?= $s->gender ;?>
                            <i class="mdi mdi-arrow-down"></i>
                          <?php endif ?> 
                          </td>
                          <td>
                           <?= $s->email ;?>
                          </td>
                          <td>
                            <?php if ($s->level === "user") {?>
                            <a href="<?= site_url("Admin/block/").$s->id;?>" class="btn btn-icons btn-rounded btn-outline-success">
                             <i class="fas fa-user-lock"></i>
                            </a>
                          <?php } else {?>
                            <a href="<?= site_url("Admin/unblock/").$s->id;?>" class="btn btn-icons btn-rounded btn-outline-danger">
                              <i class="fas fa-unlock"></i>
                            </a>
                          <?php }?>
                           <a href="<?= site_url("Admin/hapus/").$s->id;?>" class="btn btn-icons btn-rounded btn-outline-warning">
                              <i class="fas fa-trash"></i>
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