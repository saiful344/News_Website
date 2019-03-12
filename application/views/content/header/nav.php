    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="top-header-content d-flex align-items-center justify-content-between">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="index.html"><img src="<?= base_url();?>assets/images/jg.png"></a>
                            </div>

                            <!-- Login Search Area -->
                            <div class="login-search-area d-flex align-items-center">
                                <!-- Login -->
                                <div class="login d-flex">
                                 <?php if ($this->session->userdata('username')) {?>
                                    <a href="<?= site_url("Login/logout");?>">Log out</a>

                                <?php } else {?> 
                                    <a href="<?= site_url("Login/register");?>">Login</a>
                                    <a href="<?= site_url("Login/logout");?>">Register</a>
                               <?php }?>
                               
                                </div>
                                <!-- Search Form -->
                                <div class="search-form">
                                    <form action="<?= site_url("user/User/cari");?>"" method="post">
                                        <input type="search" id="search" name="search" class="form-control" placeholder="Search">
                                        <div id="searchlist"></div>
                                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="newspaper-main-menu" id="stickyMenu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="newspaperNav">

                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.html"><img src="img/core-img/logo.png" alt=""></a>
                        </div>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li class="active"><a href="<?= site_url("user/User");?>">Home</a></li>
                                    <li><a href="#">Kategori</a>
                                                <ul class="dropdown">
                                                    <?php foreach ($katalog as $k) :?>
                                                    <li><a href="<?= site_url("/user/User/kategory/").$k->nama;?>"><?= $k->nama ;?></a></li>
                                                <?php endforeach ?>
                                                </ul>
                                            </li>
                                    <li><a href="#">Breaking News</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div> 
        </div>
    </header>
    <!-- ##### Header Area End ##### -->