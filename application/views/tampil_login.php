<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title><?php echo $title; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?> " rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/css/signin.css') ?>" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo base_url('assets/js/ie-emulation-modes-warning.js') ?>"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container center">
        <?php echo form_open(base_url('login/aksilogin'), 'class="form-signin"'); ?>
          <div class="panel panel-primary">
              <div class="panel-heading">
                  <h3 class="form-signin-heading text-center"><?php echo $title; ?></h3>
                  <center>
                      <a href="<?php echo base_url('beranda'); ?>" style="color:#fff; text-decoration: none;">
                        <?php echo $web->nama_web; ?>
                      </a>
                  </center>
              </div>
              <div class="panel-body">
                <?php if ($this->session->flashdata('gagal_login')) { ?>
                  <?php $this->load->view('alert/gagal_login'); ?>
                <?php } ?>

                  <label for="id_user" class="sr-only">ID User</label>
                  <input type="text" id="id_user" class="form-control" placeholder="ID User" name="id_user" required autofocus>
                  <br>
                  <label for="Password" class="sr-only">Password</label>
                  <input type="password" id="password" class="form-control" placeholder="Password" name="password" required>
                  <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Masuk</button>
              </div>
          </div>
        <?php echo form_close(); ?>
    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
  </body>
</html>
