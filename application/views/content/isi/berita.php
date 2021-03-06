<style type="text/css">
    .isi{
        overflow: scroll;
        height: 450px;
    }
</style>
<div class="mt-4"></div>
    <!-- ##### Blog Area Start ##### -->
    <div class="blog-area section-padding-0-80">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="blog-posts-area">
                        <!-- Single Featured Post -->
                        <div class="single-blog-post featured-post single-post">
                            <div class="post-thumb">
                                <a href="#"><img src="<?= base_url();?>assets/image/<?= $content['gambar'];?>" alt=""></a>
                            </div>
                            <div class="post-data">
                                <a href="#" class="post-catagory"><?= $content['kategori'] ;?></a>
                                <a href="#" class="post-title">
                                    <h6><?= $content['judul'];?></h6>
                                </a>
                                <div class="post-meta">
                                    <p><?= $content['isi'];?> </p>
                                    <div class="newspaper-post-like d-flex align-items-center justify-content-between">
                                        <!-- Tags -->
                                        <div class="newspaper-tags d-flex">
                                            <span>Tags:</span>
                                            <ul class="d-flex">
                                                <li><a href="#">finacial,</a></li>
                                                <li><a href="#">politics,</a></li>
                                                <li><a href="#">stock market</a></li>
                                            </ul>
                                        </div>
                                     <!--    <?php
                                        $count_like=$this->M_User->count_post_like($content->id);
                                        ?> -->
                                        <!-- Post Like & Post Comment -->
                                        <div class="d-flex align-items-center post-like--comments">
                                            <span style="cursor:pointer" class="post-like"  onclick="tambah(<?= $content['id'];?>)"><img src="<?= base_url();?>assets/user/img/core-img/like.png" alt=""> <span id="like"><!-- <?php echo sizeof($count_like);?> --></span></span>
                                            <a href="#" class="post-comment"><img src="<?= base_url();?>assets/user/img/core-img/chat.png" alt=""> <span>10</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- About Author -->

                        <div class="section-heading">
                            <h6>Related</h6>
                        </div>

                        <div class="row">
                            <!-- Single Post -->
                            <?php foreach ($rekom as $r ):?>
                            <div class="col-12 col-md-6">
                                <div class="single-blog-post style-3 mb-80">
                                    <div class="post-thumb">
                                        <a href="#"><img src="<?= base_url();?>assets/image/<?= $r->gambar ?>" alt=""></a>
                                    </div>
                                    <div class="post-data">
                                        <a href="#" class="post-catagory"><?= $r->kategori ?></a>
                                        <a href="#" class="post-title">
                                            <h6><?= $r->judul ?></h6>
                                        </a>
                                        <div class="post-meta d-flex align-items-center">
                                            <a href="#" class="post-like"><img src="img/core-img/like.png" alt=""> <span>392</span></a>
                                            <a href="#" class="post-comment"><img src="img/core-img/chat.png" alt=""> <span>10</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>

                        </div>

                        <!-- Comment Area Start -->
                        <div class="comment_area clearfix">
                            <h5 class="title">3 Comments</h5>

                            <ol class="isi">
                                <?php foreach($coment as $men):?>
                                <!-- Single Comment Area -->
                                <li class="single_comment_area">
                                    <!-- Comment Content -->
                                    <div class="comment-content d-flex">
                                        <!-- Comment Author -->
                                        <div class="comment-author">
                                            <img src="<?= base_url();?>assets/image/user/<?= $men['gambar'] ;?>" alt="author">
                                        </div>
                                        <!-- Comment Meta -->
                                        <div class="comment-meta">
                                            <a href="#" class="post-author"><?= $men['username'] ;?></a>
                                            <a href="#" class="post-date"><?= $men['date'] ;?></a>
                                            <p><?= $men['coment'] ;?></p>
                                            <p> <i class="fas fa-star"></i> <?= $men['rating'] ;?></p>
                                        </div>
                                    </div>
                                </li>
                            <?php endforeach ?>
                            </ol>
                        </div>

                        <div class="post-a-comment-area section-padding-80-0">
                            <h4>Leave a comment</h4>
                            
                            <!-- Reply Form -->
                            <div class="contact-form-area">
                                <form action="<?= site_url('user/User/coment');?>" method="post">
                                <input type="hidden" name="id_user" value="<?= $this->session->userdata('id');?>">
                                <input type="hidden" name="date" value="<?= date('d-m-y');?>">
                                <input type="hidden" name="id_berita" value="<?= $content["id"];?>">
                                    <div class="row">
                                        <div class="col-12">
                                            <textarea  class="form-control" name="coment" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                        </div>
                                        <label class="mr-2">Rating</label>
                                        <select name="rating">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                        <label class="text-warning ml-2"> <i class="fas fa-star"></i></label>
                                        <div class="col-12 text-center">
                                            <button class="btn newspaper-btn mt-30 w-100" type="submit">Submit Comment</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="blog-sidebar-area">

                        <!-- Latest Posts Widget -->
                        <div class="latest-posts-widget mb-50">
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
                        <!-- Latest Comments Widget -->
                        <div class="latest-comments-widget">
                            <h3>Iklan</h3>

                            <!-- Single Comments -->
                            <div class="single-comments d-flex">
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>


<script type="text/javascript">
    $(document).ready(function(){
    $("html, body").animate({ scrollTop: $(".isi").scrollTop() }, 1000);
    });
</script>