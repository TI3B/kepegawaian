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
    <script src="<?php echo base_url(); ?>asset/js/application.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/bootstrap-tooltip.js"></script>
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
          <a class="brand" href="<?php echo base_url(); ?>">SIMPEG HOTEL</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="<?php echo base_url(); ?>"><i class="icon-home icon-white"></i> Beranda</a></li>
			  <li class="dropdown">
			  	<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-book icon-white"></i> Master <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo base_url(); ?>master_status_pegawai"><i class="icon-tag"></i> Status Pegawai</a></li>
                </ul>
              </li>
            </ul>
            <div class="btn-group pull-right">
			  <button class="btn btn-primary"><i class="icon-user icon-white"></i> <?php echo $this->session->userdata('nama'); ?></button>
			  <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
				<span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu">
				<li><a href="#"><i class="icon-wrench"></i> Pengaturan Akun</a></li>
				<li><a href="<?php echo base_url(); ?>app/logout"><i class="icon-off"></i> Log Out</a></li>
			  </ul>
			</div>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
	
    <div class="container">
	
	<div class="well">
	  <div class="row">
		<div class="span">
		  <h3>SIMPEG HOTEL</h3>
		  <p>Malang, Jawa Timur</p>
		</div>
	  </div>
	</div>
	
	<header class="jumbotron subhead" id="overview">
	  <div class="subnav">
		<ul class="nav nav-pills">
		  <li><a href="#data-pegawai">Pegawai</a></li>
		  <li><a href="#data-keluarga">Keluarga</a></li>
		  <li><a href="#data-pangkat">Riwayat Pangkat</a></li>
		  <li><a href="#data-jabatan">Riwayat Jabatan</a></li>
		  <li><a href="#data-pendidikan">Pendidikan</a></li>
		  <li><a href="#data-pelatihan">Pelatihan</a></li>
		  <li><a href="#data-penghargaan">Penghargaan</a></li>
		  <li><a href="#data-seminar">Seminar</a></li>
		  <li><a href="#data-organisasi">Organisasi</a></li>
		  <li><a href="#data-gaji">Gaji Pokok</a></li>
		  <li><a href="#data-hukuman">Hukuman</a></li>
		  <li><a href="#data-dp3">DP3</a></li>
		</ul>
	  </div>
	</header>

<section id="data-pegawai">
  <div class="well">
	<div class="page-header">
    	<h1>Data Pegawai</h1>
  	</div>
	
  	<?php
		foreach($data_pegawai->result_array() as $dp)
		{
	?>
		<div class="row">
			<div class="span3"><strong>NIP</strong></div>
			<div class="span">:</div>
			<div class="span6"><?php echo $dp['nip']; ?></div>
		</div>
		
		<div class="row">
			<div class="span3"><strong>Nomor Kartu Pegawai</strong></div>
			<div class="span">:</div>
			<div class="span6"><?php echo $dp['no_kartu_pegawai']; ?></div>
		</div>
		<div class="row">
			<div class="span3"><strong>Nama Pegawai</strong></div>
			<div class="span">:</div>
			<div class="span6"><?php echo $dp['nama_pegawai']; ?></div>
		</div>
		<div class="row">
			<div class="span3"><strong>Tempat & Tanggal Lahir</strong></div>
			<div class="span">:</div>
			<div class="span6"><?php echo $dp['tempat_lahir'].', '.$dp['tanggal_lahir']; ?></div>
		</div>
		<div class="row">
			<div class="span3"><strong>Jenis Kelamin</strong></div>
			<div class="span">:</div>
			<div class="span6"><?php echo $dp['jenis_kelamin']; ?></div>
		</div>
		<div class="row">
			<div class="span3"><strong>Agama</strong></div>
			<div class="span">:</div>
			<div class="span6"><?php echo $dp['agama']; ?></div>
		</div>
		<div class="row">
			<div class="span3"><strong>Usia</strong></div>
			<div class="span">:</div>
			<div class="span6"><?php echo $dp['usia']; ?></div>
		</div>
		<div class="row">
			<div class="span3"><strong>Status Pegawai</strong></div>
			<div class="span">:</div>
			<div class="span6"><?php echo $dp['nama_status']; ?></div>
		</div>
		
		<div class="row">
			<div class="span3"><strong>Alamat</strong></div>
			<div class="span">:</div>
			<div class="span6"><?php echo $dp['alamat']; ?></div>
		</div>
	<?php
		}
	?>
  </div>
</section>



      <footer class="well">
        <p>Copyright 2015 Mbek</p>
      </footer>

    </div> <!-- /container -->

  </body>
</html>
