<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Halaman Utama</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style type="text/css">
    .bg-login {
      background-image: url(<?php echo base_url("assets/image/pln.png"); ?>);
      width: 100%;
      height: auto;
      position: relative;
      background-size: cover;
      margin : auto;
    }
    .logo {
      
      color: #87CEEB;
      font-family: 'Marck Script', cursive;
      font-size: 25px;
    }
    .login-box-msg {
      font-family: Georgia, serif;
    }

  </style>

</head>
<body class="bg-login">
  <div class="hold-transition login-page"></div>
<div class="login-box">
  <div class="login-logo">
    <img width="30%" src="<?php echo base_url() ?>assets/image/Logo_PLN.png">
    <a href="login-box-msg"><h2>Selamat Datang di</h2></a>
    <div class="logo"><b>E-Sysmail</b></div>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Ini adalah halaman utama</p>
        <form>
        <div id="login">
        <div class="form-group has-feedback">
        <div style="border: 1px inset #2a4aeb; text-align: center; "><a href="<?php echo site_url('auth/login'); ?>" >Login as Admin</a><br></div>
      </div>
      <div class="form-group has-feedback">
        <div style="color: black; margin-bottom: 15px; text-align: center;">--OR--<br></div>
        <div style="border: 1px inset #2a4aeb; text-align: center; "><a style="margin-top: 15px;" href="<?php echo site_url('user'); ?>">Login as User</a></div>
    </div>


        
      </div>
    </form>
  </div>
  
</div>

<script src="<?=base_url()?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?=base_url()?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
</body>
</html>
