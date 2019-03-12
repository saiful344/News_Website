<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Web_profile</title>
  <!-- plugins:css -->
  <style type="text/css">
    #preloader {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 9999;
  background-color: #fff;
}
#preloader .loading {
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%,-50%);
  font: 14px arial;
}
.ipul img {
      width: 90px;
    height: 90px;
}
  </style>
  <link rel="stylesheet" href="<?= base_url();?>assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?= base_url();?>assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="<?= base_url();?>assets/vendors/css/vendor.bundle.addons.css">
  <link rel="stylesheet" href="<?= base_url();?>assets/css/ipul.css">
  <link rel="stylesheet" href="<?= base_url();?>assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url();?>assets/css/js/sweetalert2.css">
  <link rel="stylesheet" href="<?= base_url();?>assets/datepicker/css/datepicker.css">
  <link rel="stylesheet" href="<?= base_url();?>assets/jquery/jquery-ui.css">
  <link rel="stylesheet" href="<?= base_url();?>assets/drop/css/dropify.min.css">
  <link rel="stylesheet" href="<?= base_url();?>assets/table/datatables.min.css">
  <link rel="stylesheet" href="<?= base_url();?>assets/bootstrap/select/css/bootstrap-select.min.css">
<!--   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> -->
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?= base_url();?>assets/css/style.css">
  <link rel="stylesheet" href="<?= base_url();?>assets/fontawesome/css/all.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?= base_url();?>assets/images/logo.png" />
</head>
<body>
  <?= $nav ?>
  <?= $content ?>
  <?= $footer ?>   
 <div id="preloader">
  <div class="loading">
    <img src="<?= base_url();?>assets/css/loading.gif" width="80">
    <p>Harap Tunggu</p>
  </div>
</div>