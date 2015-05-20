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
	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/colorbox/colorbox.css" />
	<script src="<?php echo base_url(); ?>asset/colorbox/jquery.colorbox.js"></script>
	<script>
		  $(document).ready(function(){
			  //Examples of how to assign the ColorBox event to elements
			  $(".medium-box").colorbox({rel:'group', iframe:true, width:"900px", height:"90%"});
	
		  });
	</script>
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
          <a class="brand" href="<?php echo base_url(); ?>"><?php echo $judul_pendek; ?></a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="<?php echo base_url(); ?>"><i class="icon-home icon-white"></i> Beranda</a></li>
			  <li class="dropdown">
			  	<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-book icon-white"></i> Master <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo base_url(); ?>master_status_pegawai"><i class="icon-tag"></i> Status Pegawai</a></li>
                </ul>
              </li>
			  <li class="dropdown">
			  	
                <ul class="dropdown-menu">
                  <li><a href="<?php echo base_url(); ?>panduan_administrator"><i class="icon-fire"></i> Administrator</a></li>
                  <li><a href="<?php echo base_url(); ?>panduan_operator"><i class="icon-asterisk"></i> Operator</a></li>
                  <li><a href="<?php echo base_url(); ?>panduan_executive"><i class="icon-leaf"></i> Executive</a></li>
                </ul>
              </li>
            </ul>
            <div class="btn-group pull-right">
			  <button class="btn btn-primary"><i class="icon-user icon-white"></i> <?php echo $this->session->userdata('nama'); ?></button>
			  <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
				<span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu">
				<li><a href="<?php echo base_url(); ?>app/change_password"><i class="icon-wrench"></i> Pengaturan Akun</a></li>
				<li><a href="<?php echo base_url(); ?>manage_user"><i class="icon-tasks"></i> Manajemen User</a></li>
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
		  <h3>SIMPEG HOTEL REGENT</h3>
		  <p>Jl. Malang</p>
		</div>
	  </div>
	</div>
	
	<header class="jumbotron subhead" id="overview">
	  <div class="subnav">
		<ul class="nav nav-pills">
		  <li><a href="#data-pegawai">Pegawai</a></li>
		</ul>
	  </div>
	</header>

<section id="data-pegawai">
  <div class="well">
	<div class="page-header">
    	<h1>Data Pegawai</h1>
  	</div>
	
	<ul id="myTab" class="nav nav-tabs">
        <li class="active"><a href="#dtpegawai" data-toggle="tab">Data Pegawai</a></li>
        <li><a href="#dtfoto" data-toggle="tab">Foto Pegawai</a></li>
    </ul>
    <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade in active" id="dtpegawai">
                
        <div class="control-group">
			<div class="span3"><strong>NIP</strong></div>
			<div class="span">:</div>
			<div class="span6">
			  <input type="text" disabled="disabled" class="span6" name="nip" id="nip" value="<?php echo $nip; ?>" placeholder="NIP">
			</div>
		  </div>
		  </div>
		  <div class="control-group">
			<div class="span3"><strong>Nomor Kartu Pegawai</strong></div>
			<div class="span">:</div>
			<div class="span6">
			  <input type="text" disabled="disabled" class="span6" name="no_kartu_pegawai" id="no_kartu_pegawai" value="<?php echo $no_kartu_pegawai; ?>" placeholder="Nomor Kartu Pegawai">
			</div>
		  </div>
		  <div class="control-group">
			<div class="span3"><strong>Nama Pegawai</strong></div>
			<div class="span">:</div>
			<div class="span6">
			  <input type="text" disabled="disabled" class="span6" name="nama_pegawai" id="nama_pegawai" value="<?php echo $nama_pegawai; ?>" placeholder="Nama Pegawai">
			</div>
		  </div>
		  <div class="control-group">
			<div class="span3"><strong>Tempat Lahir</strong></div>
			<div class="span">:</div>
			<div class="span6">
			  <input type="text" disabled="disabled" class="span6" name="tempat_lahir" id="tempat_lahir" value="<?php echo $tempat_lahir; ?>" placeholder="Tempat Lahir">
			</div>
		  </div>
		  <div class="control-group">
			<div class="span3"><strong>Tanggal Lahir</strong></div>
			<div class="span">:</div>
			<div class="span6">
			  <input type="text" disabled="disabled" class="span6" name="tanggal_lahir" id="tanggal_lahir" value="<?php echo $tanggal_lahir; ?>" placeholder="Tanggal Lahir">
			</div>
		  </div>
		  <div class="control-group">
			<div class="span3"><strong>Jenis Kelamin</strong></div>
			<div class="span">:</div>
			<div class="span6">
				<select disabled="disabled" data-placeholder="Jenis Kelamin" class="chzn-select" style="width:500px;" tabindex="2" name="jenis_kelamin" id="jenis_kelamin">
					<?php
					$laki="";$perempuan="";$kosong1="";
					if($jenis_kelamin=="Laki-Laki"){ $laki='selected="selected"';$perempuan="";$kosong1=""; }
					else if($jenis_kelamin=="Perempuan"){ $laki='';$perempuan='selected="selected"';$kosong1=""; }
					else { $laki='';$perempuan='';$kosong1='selected="selected"'; }
					?>
          			<option value="" <?php echo $kosong1; ?>></option>
          			<option value="Laki-Laki" <?php echo $laki; ?>>Laki-Laki</option>
          			<option value="Perempuan" <?php echo $perempuan; ?>>Perempuan</option>
				</select>
			</div>
		  </div>
		  <div class="control-group">
			<div class="span3"><strong>Agama</strong></div>
			<div class="span">:</div>
			<div class="span6">
				<select disabled="disabled" data-placeholder="Agama" class="chzn-select" style="width:500px;" tabindex="2" name="agama" id="agama">
					<?php
					$islam="";$hindu="";$budha="";$protestan="";$katolik="";$konghucu="";$lainnya="";$kosong="";$kristen="";
					if($agama==""){ $islam='';$hindu='';$budha='';$protestan='';$katolik='';$konghucu='';$lainnya='';$kosong='selected="selected"';$kristen=""; }
					else if($agama=="Hindu"){ $islam='';$hindu='selected="selected"';$budha='';$protestan='';$katolik='';$konghucu='';$lainnya='';$kristen="";$kosong=""; }
					else if($agama=="Budha"){ $islam='';$hindu='';$budha='selected="selected"';$protestan='';$katolik='';$konghucu='';$lainnya='';$kristen="";$kosong=""; }
					else if($agama=="Kristen"){ $islam='';$hindu='';$budha='';$protestan='';$katolik='';$konghucu='';$lainnya='';$kosong="";$kristen='selected="selected"'; }
					else if($agama=="Kristen Protestan"){ $islam='';$hindu='';$budha='';$protestan='selected="selected"';$katolik='';$konghucu='';$kristen="";$lainnya='';$kosong=""; }
					else if($agama=="Kristen Katolik"){ $islam='';$hindu='';$budha='';$protestan='';$katolik='selected="selected"';$konghucu='';$kristen="";$lainnya='';$kosong=""; }
					else if($agama=="Konghucu"){ $islam='';$hindu='';$budha='';$protestan='';$katolik='';$konghucu='selected="selected"';$lainnya='';$kristen="";$kosong=""; }
					else if($agama=="Lainnya"){ $islam='';$hindu='';$budha='';$protestan='';$katolik='';$konghucu='';$lainnya='selected="selected"';$kristen="";$kosong=""; }
					else if($agama=="Islam"){ $islam='selected="selected"';$hindu='';$budha='';$protestan='';$katolik='';$konghucu='';$lainnya='';$kristen="";$kosong=""; }
					?>
          			<option value="" <?php echo $kosong; ?>></option>
          			<option value="Islam" <?php echo $islam; ?>>Islam</option>
          			<option value="Hindu" <?php echo $hindu; ?>>Hindu</option>
          			<option value="Budha" <?php echo $budha; ?>>Budha</option>
          			<option value="Kristen" <?php echo $kristen; ?>>Kristen</option>
          			<option value="Kristen Protestan" <?php echo $protestan; ?>>Kristen Protestan</option>
          			<option value="Kristen Katolik" <?php echo $katolik; ?>>Kristen Katolik</option>
          			<option value="Konghucu" <?php echo $konghucu; ?>>Konghucu</option>
          			<option value="Lainnya" <?php echo $lainnya; ?>>Lainnya</option>
				</select>
			</div>
		  </div>
		  <div class="control-group">
			<div class="span3"><strong>Usia</strong></div>
			<div class="span">:</div>
			<div class="span6">
			  <input type="text" disabled="disabled" class="span6" name="usia" id="usia" value="<?php echo $usia; ?>" placeholder="Usia">
			</div>
		  </div>
		  <div class="control-group">
			<div class="span3"><strong>Status Pegawai</strong></div>
			<div class="span">:</div>
			<div class="span6">
				<select disabled="disabled" data-placeholder="Status Pegawai" class="chzn-select" style="width:500px;" tabindex="2" name="status_pegawai" id="status_pegawai">
          			<option value=""></option>
					<?php
						foreach($mst_status_pegawai->result_array() as $sp)
						{
							if($sp['id_status_pegawai']==$status_pegawai)
							{
					?>
						<option value="<?php echo $sp['id_status_pegawai']; ?>" selected="selected"><?php echo $sp['nama_status']; ?></option>
					<?php
							}
							else
							{
					?>
						<option value="<?php echo $sp['id_status_pegawai']; ?>"><?php echo $sp['nama_status']; ?></option>
					<?php
							}
						}
					?>
				</select>
			</div>
		  </div>
		  <div class="control-group">
			<div class="span3"><strong>Alamat</strong></div>
			<div class="span">:</div>
			<div class="span6">
				<textarea disabled="disabled" class="span6" style="outline:none; resize:none;" name="alamat" id="alamat" placeholder=
			  "Alamat"><?php echo $alamat_pegawai; ?></textarea>
			</div>
		  </div>
    	</div>
        <div class="tab-pane fade in active" id="dtpangkat">
          <div class="control-group">
			<div class="span3"><strong>Jabatan</strong></div>
			<div class="span">:</div>
			<div class="span6">
			<select disabled="disabled" name="status_pegawai_pangkat">
			  	<?php
			  		foreach($mst_golongan->result_array() as $msp)
			  		{
			  			if($id_golongan==$msp['id_golongan'])
			  			{
			  	?>
			  		<option value="<?php echo $msp['id_golongan']; ?>" selected="selected"><?php echo $msp['golongan']; ?></option>
			  	<?php
			  			}
			  			else
			  			{
			  	?>
			  		<option value="<?php echo $msp['id_golongan']; ?>"><?php echo $msp['golongan']; ?></option>
			  	<?php
			  			}
			  		}
			  	?>
			</select>
			</div>
		  </div>
        
    </div>
	</div>
</section>




      <footer class="well">
        <p>Copyright by mbek</p>
      </footer>

    </div> <!-- /container -->

  </body>
</html>
