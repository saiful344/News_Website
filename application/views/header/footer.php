   <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018
              <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with
              <i class="mdi mdi-heart text-danger"></i>
            </span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="<?= base_url();?>assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="<?= base_url();?>assets/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="<?= base_url();?>assets/js/off-canvas.js"></script>
  <script src="<?= base_url();?>assets/js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?= base_url();?>assets/js/dashboard.js"></script>
  <!-- End custom js for this page-->
  <script type="text/javascript" src="<?= base_url();?>assets/js/js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="<?= base_url();?>assets/js/js/jquery.min.js"></script>
  <script type="text/javascript" src="<?= base_url();?>assets/js/js/script.js"></script>
  <script type="text/javascript" src="<?= base_url();?>assets/datepicker/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="<?= base_url();?>assets/bootstrap/js/bootstrap.js"></script>
  <script type="text/javascript" src="<?= base_url();?>assets/css/js/sweetalert2.min.js"></script>
  <script type="text/javascript" src="<?= base_url();?>assets/css/js/ipul.js"></script>
  <script type="text/javascript" src="<?= base_url();?>assets/drop/js/dropify.min.js"></script>
  <script type="text/javascript" src="<?= base_url();?>assets/ckeditor/ckeditor.js"></script>
  <script type="text/javascript" src="<?= base_url();?>assets/table/datatables.min.js"></script>
    <script type="text/javascript" src="<?= base_url();?>assets/bootstrap/select/js/bootstrap-select.min.js"></script>
  <!-- <script type="text/javascript" src=" https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script> -->
  <script type="text/javascript">
    $(document).ready(function(){
      $('#datatables').dataTable();
    });
  </script>
  <script type="text/javascript">
    var ckeditor =CKEDITOR.replace('isi',{
                  height:'300px'
    });
    CKEDITOR.disableAutoInline = true;
    CKEDITOR.inline('editable');
  </script>
  <script type="text/javascript">
    $(document).ready(function(){
        $('.dropify').dropify({
            messages: {
                default: 'Drag and drop a file here or click',
                replace: 'Change',
                remove:  'Delete',
                error:   'error'
            }
        });
    });
  </script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('#kategori').keyup(function(){
        var isi= $(this).val();
        if (isi != '') {
            $.ajax({
              url:"<?php echo site_url('News/auto');?>",
              method:"POST",
              data:{isi:isi},
              success:function(data){
                $('#kategorilist').fadeIn();
                $('#kategorilist').html(data);
              }
            });
        }
      });
    });
  </script>
  <script type="text/javascript">
 $(document).ready(function(){
   $('.tanggal').datepicker();
    });
      $(window).load(function() {
          $("#preloader").fadeOut("slow");
      });
    var ctx = document.getElementById("chart");
      var myChart = new Chart(ctx, {
          type: 'line',
          data: {
              labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni"],
              datasets: [{
                  label: 'User',
                  data: [12, 19, 3, 5, 2, 3],
                  backgroundColor: [
                      'rgba(255, 99, 132, 0.2)',
                      'rgba(54, 162, 235, 0.2)',
                      'rgba(255, 206, 86, 0.2)',
                      'rgba(75, 192, 192, 0.2)',
                      'rgba(153, 102, 255, 0.2)',
                      'rgba(255, 159, 64, 0.2)'
                  ],
                  borderColor: [
                      'rgba(255,99,132,1)',
                      'rgba(54, 162, 235, 1)',
                      'rgba(255, 206, 86, 1)',
                      'rgba(75, 192, 192, 1)',
                      'rgba(153, 102, 255, 1)',
                      'rgba(255, 159, 64, 1)'
                  ],
                  borderWidth: 1
              }]
          },
          options: {
              scales: {
                  yAxes: [{
                      ticks: {
                          beginAtZero:true
                      }
                  }]
              }
          }
      });
  </script>
</body>
</html>