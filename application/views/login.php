<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="description" content="Miminium Admin Template v.1">
  <meta name="author" content="Isna Nur Azis">
  <meta name="keyword" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Digital Store</title>

  <!-- start: Css -->
  <link rel="stylesheet" type="text/css" href="<?= base_url()?>/asset/css/bootstrap.min.css">

  <!-- plugins -->
  <link rel="stylesheet" type="text/css" href="<?= base_url()?>/asset/css/plugins/font-awesome.min.css"/>
  <link rel="stylesheet" type="text/css" href="<?= base_url()?>/asset/css/plugins/simple-line-icons.css"/>
  <link rel="stylesheet" type="text/css" href="<?= base_url()?>/asset/css/plugins/animate.min.css"/>
  <link rel="stylesheet" type="text/css" href="<?= base_url()?>/asset/css/plugins/icheck/skins/flat/aero.css"/>
  <link href="<?= base_url()?>/asset/css/style.css" rel="stylesheet">
  <!-- end: Css -->

  <link rel="shortcut icon" href="<?= base_url()?>/asset/img/logomi.png">
</head>
<body id="mimin" class="dashboard form-signin-wrapper">
    <div class="container">      
	  <form class="form-signin" action="<?= base_url('index.php/Login/login')?>" method="post">
	  <div class="panel periodic-login">
        	<span class="atomic-number">01</span>
            <div class="panel-body text-center">
                <h1 class="atomic-symbol">DS</h1>
                <p class="atomic-mass">Malang</p>
                <p class="element-name">Digital Store</p>
					<div class="form-group form-animate-text" style="margin-top:40px !important;">
						<input type="text" class="form-text" placeholder=""  name="username">
						<label >Username</label>
					</div>
					<div class="form-group form-animate-text" style="margin-top:40px !important;">
						<input type="password" class="form-text" name="password">
						<label>Password</label>
					</div>
					<label class="pull-left">
                  	<input type="checkbox" class="icheck pull-left" name="checkbox1"/> Remember me
                  	</label>
					<input type="submit" name="submit" value="Login"  class="btn btn-primary btn-lg btn-block" style="margin-top:80px;">
			</div>
		</div>	
	   </form>
	</div>

      <!-- end: Content -->
      <!-- start: Javascript -->
      <script src="<?= base_url()?>/asset/js/jquery.min.js"></script>
      <script src="<?= base_url()?>/asset/js/jquery.ui.min.js"></script>
      <script src="<?= base_url()?>/asset/js/bootstrap.min.js"></script>

      <script src="<?= base_url()?>/asset/js/plugins/moment.min.js"></script>
      <script src="<?= base_url()?>/asset/js/plugins/icheck.min.js"></script>

      <!-- custom -->
      <script src="<?= base_url()?>/asset/js/main.js"></script>
      <script type="text/javascript">
       $(document).ready(function(){
         $('input').iCheck({
          checkboxClass: 'icheckbox_flat-aero',
          radioClass: 'iradio_flat-aero'
        });
       });
     </script>
     <!-- end: Javascript -->
   </body>
   </html>