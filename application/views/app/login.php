<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $judul_lengkap.' - '.$instansi; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="<?php echo base_url(); ?>asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/css/docs.css" rel="stylesheet">
	
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/bootstrap-tooltip.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/application.js"></script>
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="<?php echo base_url(); ?>">SIMPEG HOTEL REGENT MALANG</a>
          <div class="nav-collapse collapse">
			<?php echo form_open('app/index','class="navbar-form pull-right"'); ?>
              <input class="span2" type="text" name="username" placeholder="Username" value="<?php echo set_value('username'); ?>">
              <input class="span2" type="password" name="password" placeholder="Password">
              <button type="submit" class="btn btn-info "><i class="icon-share icon-white"></i> Log in</button>
           <?php echo form_close(); ?>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
    <div class="container">
	
	<?php if(validation_errors()) { ?>
	<div class="alert alert-block">
	  <button type="button" class="close" data-dismiss="alert">×</button>
	  	<h4>Terjadi Kesalahan!</h4>
		<?php echo validation_errors(); ?>
	</div>
	<?php } ?>
	
	<?php if($this->session->flashdata('result_login')) { ?>
	<div class="alert alert-block">
	  <button type="button" class="close" data-dismiss="alert">×</button>
	  	<h4>Terjadi Kesalahan!</h4>
		<?php echo $this->session->flashdata('result_login'); ?>
	</div>
	<?php } ?>
      <div class="hero-unit">
        <h2>Selamat Datang di Simpeg Hotel Regent</h2>
        <p>Silahkan masukkan username dan password anda untuk mulai untuk melakukan manajemen atau pengolahan data kepegawaian sesuai dengan hak akses yang anda miliki.</p>
        <p><a class="btn btn-primary btn-large">Pelajari Lebih Lanjut <i class="icon-circle-arrow-right icon-white"></i> </a></p>
      </div>


      <footer class="well">
        <p>Copyright 2015 Mbek</p>
      </footer>

    </div> <!-- /container -->

  </body>
</html>
