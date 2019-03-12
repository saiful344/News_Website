<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jgnews||Sign in</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?= base_url();?>assets/form/fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/bootstrap/css/bootstrap.min.css">
     <link rel="stylesheet" href="<?= base_url();?>assets/css/ipul.css">
     <style type="text/css">
     body{
      background-image: url("<?= base_url();?>assets/images/auth/ipul.jpg");
      background-size: cover;
     }
     @media(min-width: 992px){
       .login{
        margin-top: 10%;
        margin-left: 28%;
        width: 500px;
        height: 470px;
        /*padding-bottom: 30px;*/
       }
       .login input[type=text]{
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
       .gambar img{ 
        /*margin-top: -50px;*/
        margin-left: 35%;
        margin-bottom: 0;
        width: 120px;
        height: 120px;
       }
       .login .title-card{
        font-family: sans-serif;
        color:#327ac3;
       }
       .login .social-login li{
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
     }
     </style>

</head>
<body>
    <div class="container">
      <div class="login col-lg-5 col-sm-12 col-xm-12 shadow p-3 mb-5 bg-white rounded">
        <div class="gambar">
          <img src="<?= base_url();?>assets/images/logo_2.png">
        </div>
        <span><?= $this->session->flashdata('flash') ?></span>
      <?php echo form_open('Login');?>
        <div class="">
          <i class="zmdi zmdi-account material-icons-name"></i>
        <input type="text" class="form-control" id="exampleInputEmail1" name="username" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">Insert your username or email</small>
      </div>
      <div class="">
        <label for="pass"><i class="zmdi zmdi-lock"></i></label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
      </div>
      <div class=" form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i> <small>Remember me</small></label>
      </div>
      <button type="submit" class="btn btn-primary float-right">Submit</button>
    </form>
    <div class="clearfix"></div>
           <div class="social-login">
              <span class="social-label">Or login with</span>
                <ul class="socials">
                  <div class="row">
                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                 <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
              </div>
              </ul>
            <div class="text-block text-center my-3 float-right">
            <span class="text-small font-weight-semibold">Don't have an account? </span>
              <a href="<?= site_url("Login/register");?>" class="text-black text-small">Sign up</a>
            </div>
       </div>
  </div>
  </div>
    <!-- JS -->
    <script src="<?= base_url() ;?>assets/form/vendor/jquery/jquery.min.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>