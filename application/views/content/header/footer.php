 <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">

        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row">

                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="footer-widget-area mt-80">
                            <!-- Footer Logo -->
                            <div class="footer-logo">
                                <a href="index.html"><img src="<?= base_url();?>assets/images/jg_2.png" width="100"></a>
                            </div>
                            <!-- List -->
                            <ul class="list">
                                <li><a href="mailto:contact@youremail.com">saifulmuhammad414@gmail.com</a></li>
                                <li><a href="tel:+4352782883884">088980000</a></li>
                                <li><a href="http://yoursitename.com">www.Jgnews.com</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-2">
                        <div class="footer-widget-area mt-80">
                            <!-- Title -->
                            <h4 class="widget-title">Social</h4>
                            <!-- List -->
                            <ul class="list">
                            <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i> Jg_News</a></li>
                            <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i> Jgnews_bisa</a></li>
                            <li><a href="#"><i class="display-flex-center zmdi zmdi-instagram"></i> Jgnews_808</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-4 col-lg-2">
                        <div class="footer-widget-area mt-80">
                            <!-- Title -->
                            <h4 class="widget-title">Company</h4>
                            <!-- List -->
                            <ul class="list">
                                <li><a href="#"><img src="<?= base_url();?>assets/images/logo.png" width="100"> Jg_Production</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-4 col-lg-2">
                        <div class="footer-widget-area mt-80">
                            <!-- Title -->
                            <h4 class="widget-title">Relation</h4>
                            <!-- List -->
                            <ul class="list">
                                <li><a href="#">Developer</a></li>
                                <li><a href="#">Enginer</a></li>
                                <li><a href="#">fast</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Footer Area -->
        <div class="bottom-footer-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <!-- Copywrite -->
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> The News for the Fututure<i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">JgProduction</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Files ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="<?= base_url();?>assets/user/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="<?= base_url();?>assets/user/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="<?= base_url();?>assets/user/js/bootstrap/bootstrap.min.js"></script>
    
    <!-- All Plugins js -->
    <script src="<?= base_url();?>assets/user/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="<?= base_url();?>assets/user/js/active.js"></script>
    <script type="text/javascript">
        function like(id){
            $.ajax({
                url:'<?= site_url("user/User/like");?>',
                method:'POST',
                data:{id:id},
                success:function(data){
                    alert('Terima kasih');
                    console.log(data);
                }
            });
        }
    </script>
    <script type="text/javascript">

    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#search').keyup(function(){
                var query = $(this).val();
                if (query != '') {
                    $.ajax({
                        url:"<?= site_url("user/User/search");?>",
                        method:"POST",
                        data:{query:query},
                        success:function(data){
                            $('#searchlist').fadeIn();
                            $('#searchlist').html(data);
                        }
                    });
                }
            });
            $(document).on('click','li',function(){
                $('#search').val($(this).text());
                $('#searchlist').fadeOut();
            });
        });
    </script>
</body>

</html>