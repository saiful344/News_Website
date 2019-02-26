<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?= base_url();?>assets/form/fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/bootstrap/css/bootstrap.min.css">
     <link rel="stylesheet" href="<?= base_url();?>assets/css/ipul.css">
       <link rel="stylesheet" href="<?= base_url();?>assets/fontawesome/css/all.css">
     <style type="text/css">
     body{
      background-image: url("<?= base_url();?>assets/images/auth/ipul_2.jpg");
      background-size: cover;
     }
     @media(min-width: 992px){
       img{ 
        /*margin-top: -50px;*/
        margin-left: 35%;
        margin-bottom: 0;
        width: 120px;
        height: 120px;
       }
       .social-login li{
        border-radius: 20px;
        border: 1px solid  #327ac3;
        padding-top: 2%;
        /*padding-right: 2%;*/
        padding-left: 3.4%;
        padding-bottom: 1.4%;
        width: 40px;
        list-style-type: none;
        margin-left: 2%;
       }
      .login input[type=text]{
        margin-top: -28px;
        margin-left: 25px;
        width: 90%;
        /*margin-bottom: 20px;*/
       }
      .login input[type=email]{
        margin-top: -28px;
        margin-left: 25px;
        width: 90%;
        /*margin-bottom: 20px;*/
       }
       .login #emailHelp{
        margin-bottom: 20px;
        margin-left: 28px;
       }

      .login input[type=password]{
        margin-top: -28px;
        margin-left: 25px;
        margin-bottom: 20px;
        width: 90%;
       }
       .reg{
        margin-top: 10px;
        margin-left: 20%;
       }
     }
     </style>

</head>
<body>

    <div class="container ">
      <div class="reg col-lg-7 col-sm-12 col-xm-12 shadow p-3 mb-5 bg-white rounded ">
        <div class="gambar">
          <img src="<?= base_url();?>assets/images/logo_2.png">
        </div>
        <?php echo form_open_multipart('Login/register'); ?>
          <input type="hidden" name="level" value="user">
          <div class="form-row login">
              <div class="form-group col-md-6">
                <i class="zmdi zmdi-account material-icons-name"></i>
              <input type="text" class="form-control" id="exampleInputEmail1" name="username" placeholder="Username">
            </div>
            <div class="form-group col-md-6">
              <i class="zmdi zmdi-lock"></i>
              <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
            </div>
          </div>
          <div class="form-row login">
              <div class="form-group col-md-6">
                <i class="fas fa-envelope-square"></i>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email">
            </div>
            <div class="form-group col-md-6">
               <i class="far fa-address-card"></i>
               <input type="text" class="form-control" id="exampleInputPassword1" name="nama" placeholder="Full name">
            </div>
          </div>
           <div class="form-group ">
              <label for="inputCity"><i class="fas fa-map-marker-alt"></i> Address</label>
              <input type="text" class="form-control" name="address" id="inputCity">
            </div>
            <div class="form-group">
              <label for="exampleFormControlFile1"><i class="fas fa-chalkboard-teacher"></i> Profile</label>
              <input type="file" class="form-control-file" name=
              "foto" id="exampleFormControlFile1">
              <div class="invalid-feedback">Example invalid custom file feedback</div>
            </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputCity"><i class="fas fa-globe"></i> No hp</label>
              <input type="text" name="no_hp" class="form-control" id="inputCity">
            </div>
            <div class="form-group col-md-6">
              <label for="inputState"><i class="fas fa-genderless"></i> Gender</label>
              <select id="inputState" name="gender" class="form-control">
                <option selected value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck" checked>
              <label class="form-check-label" for="gridCheck">
                Check me out
              </label>
            </div>
          </div>
          <button type="submit" class="btn btn-primary float-right">Sign in</button>
          <?= $error ?>
        </form>
    <div class="clearfix"></div>
            <div class="text-block text-center my-3">
            <span class="text-small font-weight-semibold">Already have an account? </span>
              <a href="<?= site_url("Login");?>" class="text-black text-small">Login</a>
            </div>
  </div>
  </div>
    <!-- JS -->
    <script src="<?= base_url() ;?>assets/form/vendor/jquery/jquery.min.js"></script>
   <script type="text/javascript" src="<?= base_url();?>assets/bootstrap/js/bootstrap.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>