<div class="mt-4"></div>
    <!-- ##### Blog Area Start ##### -->
    <div class="blog-area section-padding-0-80">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="blog-posts-area">
                        <?php foreach ($isi as $i ):?>
                        <!-- Single Featured Post -->
                        <div class="single-blog-post featured-post mb-30">
                            <div class="post-thumb">
                                <a href="#"><img src="<?= base_url();?>assets/image/<?= $i->gambar ;?>" alt="" width="600" ></a>
                            </div>
                            <div class="post-data">
                                <a href="#" class="post-catagory"><?= $i->kategori ;?></a>
                                <a href="<?= site_url("user/User/berita/").$i->id;?>" class="post-title">
                                    <h6><?= $i->judul;?></h6>
                                </a>
                                <div class="post-meta">
                                    <p class="post-excerp">
                                        <?php
                                        $isi = $i->isi;
                                        echo substr($isi,0,200);
                                        echo "   ................."
                                        ?>
                                     </p>
                                    <!-- Post Like & Post Comment -->
                                    <div class="d-flex align-items-center">
                                        <a href="#" class="post-like"><img src="img/core-img/like.png" alt=""> <span>392</span></a>
                                        <a href="#" class="post-comment"><img src="img/core-img/chat.png" alt=""> <span>10</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>

                    </div>

                   <?= $halaman ?>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="blog-sidebar-area">

                        <!-- Latest Posts Widget -->
                        <div class="latest-posts-widget mb-50">

                         <?php foreach ($katalog as $k) :?>
                            <div class="single-blog-post small-featured-post d-flex">
                                <div class="post-thumb">
                                    <a href="<?= site_url('user/User/kategory/').$k->nama;?>"><img src="<?= base_url();?>assets/images/auth/<?= $k->icon ?>" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="<?= site_url('user/User/kategory/').$k->nama;?>" class="post-catagory"><?= $k->nama ?></a>
                                    <div class="post-meta">
                                        <a href="<?= site_url('user/User/kategory/').$k->nama;?>" class="post-title">
                                            <h6><?= $k->deskripsi ;?></h6>
                                        </a>
                                        <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                        </div>

                        <!-- Popular News Widget -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Blog Area End ##### -->
