    <!-- ##### Featured Post Area Start ##### -->
    <div class="featured-post-area mt-4">
        <div class="container">
            <div class="row">
            <div class="col-12 col-lg-8">
                    <div class="row">
                        <?php foreach ($content as $b):?>
                        <!-- Single Post -->
                        <div class="col-12 col-md-6">
                            <div class="single-blog-post style-3">
                                <div class="post-thumb">
                                    <a href="#"><img src="<?= base_url();?>assets/image/<?= $b->gambar ?>" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-catagory"><?= $b->kategori ?></a>
                                    <a href="<?= site_url("user/User/berita/")?><?= $b->id ?>" class="post-title">
                                        <h6><?= $b->judul ?></h6>
                                    </a>
                                    <div class="post-meta d-flex align-items-center">
                                        <a href="#" class="post-like"><img src="<?= base_url();?>assets/user/img/core-img/like.png" onclick="like('<?= $b->id ?>')"> <span class="hasil"></span></a>
                                        <a href="#" class="post-comment"><img src="<?= base_url();?>assets/user/img/core-img/chat.png" alt=""> <span>10</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ;?>

                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Single Featured Post -->
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
            </div>
        </div>
    </div>
    <!-- ##### Featured Post Area End ##### -->

    <!-- ##### Popular News Area Start ##### -->
    <div class="popular-news-area section-padding-80-50">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="section-heading">
                        <h6>Popular News</h6>
                    </div>

                    <div class="row">
                        <?php foreach($populer as $pop):?>
                        <!-- Single Post -->
                        <div class="col-12 col-md-6">
                            <div class="single-blog-post style-3">
                                <div class="post-thumb">
                                    <a href="#"><img src="<?= base_url();?>assets/image/<?= $pop->gambar ?>" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-catagory"><?= $pop->kategori ?></a>
                                    <a href="#" class="post-title">
                                        <h6><?= $pop->judul ?></h6>
                                    </a>
                                    <div class="post-meta d-flex align-items-center">
                                        <a href="#" class="post-like"><img src="img/core-img/like.png" alt=""> <span><?= $pop->hasil ?></span></a>
                                        <a href="#" class="post-comment"><img src="img/core-img/chat.png" alt=""> <span>10</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ;?>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="section-heading">
                        <h6>Info</h6>
                    </div>
                    <!-- Popular News Widget -->
                    <div class="popular-news-widget mb-30">
                        <h3>4 Most Popular News</h3>

                        <!-- Single Popular Blog -->
                        <div class="single-popular-post">
                            <a href="#">
                                <h6><span>1.</span> Amet, consectetur adipiscing elit. Nam eu metus sit amet odio sodales.</h6>
                            </a>
                            <p>April 14, 2018</p>
                        </div>

                        <!-- Single Popular Blog -->
                        <div class="single-popular-post">
                            <a href="#">
                                <h6><span>2.</span> Consectetur adipiscing elit. Nam eu metus sit amet odio sodales placer.</h6>
                            </a>
                            <p>April 14, 2018</p>
                        </div>

                        <!-- Single Popular Blog -->
                        <div class="single-popular-post">
                            <a href="#">
                                <h6><span>3.</span> Adipiscing elit. Nam eu metus sit amet odio sodales placer. Sed varius leo.</h6>
                            </a>
                            <p>April 14, 2018</p>
                        </div>

                        <!-- Single Popular Blog -->
                        <div class="single-popular-post">
                            <a href="#">
                                <h6><span>4.</span> Eu metus sit amet odio sodales placer. Sed varius leo ac...</h6>
                            </a>
                            <p>April 14, 2018</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Popular News Area End ##### -->
    </div>
    </div>
    </div>
    <!-- ##### Editorial Post Area End ##### -->
   