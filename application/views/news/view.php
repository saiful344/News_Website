   <style type="text/css">
     span{
      font-size: 12px;
      color: grey;
      margin-left: 10px;
     }
   </style>
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="col-lg-12 stretch-card">
               <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
                <?php if ($this->session->flashdata('flash')):?>
                <?php endif ?>
              <div class="card">
                <div class="card-body">
                  <div class="shadow-sm p-3 mb-5 bg-white rounded"><?= $contain->judul ;?></div>
                   <p class="" style="">
                    <img class="float-left mr-3 mb-3" src="<?=  base_url();?>assets/image/<?= $contain->gambar ;?>" height="300" width="415">
                    <p class="float-right " style="text-align:right,left; width: 506px;"><?php $isi= $contain->isi ; echo substr($isi,0,1500)?> </p>
                </div>

                <div class="clearfix"></div>
                    <span>Tanggal :<?= $contain->tgl_b ;?></span><br>
                    <span class="mb-2">Kategori :<?= $contain->kategori ;?></span>
                <a href="<?= site_url("News")?>" class="btn btn-outline-warning float-right mb-3" style="width: 100px; margin-left: 80%;">
                          kembali
                        </a>
              </div>
            </div>
          </div>