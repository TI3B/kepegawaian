<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>input</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="<?php echo base_url(); ?>asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>asset/css/docs.css" rel="stylesheet">
	<style>
		body{
			margin:20px;
			padding:0px;
			}
	</style>
	
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/application.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/bootstrap-tooltip.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/bootstrap-tab.js"></script>
	<link href="<?php echo base_url(); ?>asset/css/chosen.css" rel="stylesheet" type="text/css">
	<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/themes/sunny/jquery-ui.css" type="text/css" rel="stylesheet"/>	
	<script type="text/javascript" src="<?php echo base_url(); ?>asset/js/jquery-ui-1.7.2.custom.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>asset/js/jquery.ui.i18n.all.min.js"></script>
	<script type="text/javascript">
	$(function(){
		$.datepicker.setDefaults($.datepicker.regional['id']);
		$('#tanggal_lahir').datepicker({dateFormat: 'dd MM yy'});
	});
	</script>
  </head>

  <body>
	<div class="well">
	
	<?php echo form_open_multipart('pegawai/simpan','class="form-horizontal"'); ?>
	<ul id="myTab" class="nav nav-tabs">
        <li class="active"><a href="#dtpegawai" data-toggle="tab">Data Pegawai</a></li>
        <li><a href="#dtfoto" data-toggle="tab">Foto Pegawai</a></li>
    </ul>
    <?php if(validation_errors()) { ?>
	<div class="alert alert-block">
	  <button type="button" class="close" data-dismiss="alert">×</button>
	  	<h4>Terjadi Kesalahan!</h4>
		<?php echo validation_errors(); ?>
	</div>
	<?php } ?>
    <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade in active" id="dtpegawai">
                
        <div class="control-group">
			<label class="control-label" for="nip">NIP</label>
			<div class="controls">
			<?php
			if($st=="tambah")
			{
			?>
			  <input type="text" class="span6" name="nip" id="nip" value="<?php echo set_value('nip'); ?>" placeholder="NIP">
			<?php
			}
			else
			{
			?>
			  <input type="text" class="span6" name="nip" id="nip" value="<?php echo $nip; ?>" placeholder="NIP">
			<?php
			}
			?>
			</div>
		  </div>
		  <div class="control-group">
			<label class="control-label" for="no_kartu_pegawai">Nomor Kartu Pegawai</label>
			<div class="controls">
			<?php
			if($st=="tambah")
			{
			?>
			  <input type="text" class="span6" name="no_kartu_pegawai" id="no_kartu_pegawai" value="<?php echo set_value('no_kartu_pegawai'); ?>" placeholder="Nomor Kartu Pegawai">
			<?php
			}
			else
			{
			?>
			  <input type="text" class="span6" name="no_kartu_pegawai" id="no_kartu_pegawai" value="<?php echo $no_kartu_pegawai; ?>" placeholder="Nomor Kartu Pegawai">
			<?php
			}
			?>
			</div>
		  </div>
		  <div class="control-group">
			<label class="control-label" for="nama_pegawai">Nama Pegawai</label>
			<div class="controls">
			<?php
			if($st=="tambah")
			{
			?>
			  <input type="text" class="span6" name="nama_pegawai" id="nama_pegawai" value="<?php echo set_value('nama_pegawai'); ?>" placeholder="Nama Pegawai">
			<?php
			}
			else
			{
			?>
			  <input type="text" class="span6" name="nama_pegawai" id="nama_pegawai" value="<?php echo $nama_pegawai; ?>" placeholder="Nama Pegawai">
			<?php
			}
			?>
			</div>
		  </div>
		  <div class="control-group">
			<label class="control-label" for="jenis_kelamin">Jenis Kelamin</label>
			<div class="controls">
				<select data-placeholder="Jenis Kelamin" class="chzn-select" style="width:500px;" tabindex="2" name="jenis_kelamin" id="jenis_kelamin">
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
			<label class="control-label" for="agama">Agama</label>
			<div class="controls">
				<select data-placeholder="Agama" class="chzn-select" style="width:500px;" tabindex="2" name="agama" id="agama">
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
			<label class="control-label" for="status_pegawai">Status Pegawai</label>
			<div class="controls">
				<select data-placeholder="Status Pegawai" class="chzn-select" style="width:500px;" tabindex="2" name="status_pegawai" id="status_pegawai">
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
			<label class="control-label" for="tempat_lahir">Tempat Lahir</label>
			<div class="controls">
			<?php
			if($st=="tambah")
			{
			?>
			  <input type="text" class="span6" name="tempat_lahir" id="tempat_lahir" value="<?php echo set_value('tempat_lahir'); ?>" placeholder="Tempat Lahir">
			<?php
			}
			else
			{
			?>
			  <input type="text" class="span6" name="tempat_lahir" id="tempat_lahir" value="<?php echo $tempat_lahir; ?>" placeholder="Tempat Lahir">
			<?php
			}
			?>
			</div>
		  </div>
		  <div class="control-group">
			<label class="control-label" for="tanggal_lahir">Tanggal Lahir</label>
			<div class="controls">
			<?php
			if($st=="tambah")
			{
			?>
			  <input type="text" class="span6" name="tanggal_lahir" id="tanggal_lahir" value="<?php echo set_value('tanggal_lahir'); ?>" placeholder="Tanggal Lahir">
			<?php
			}
			else
			{
			?>
			  <input type="text" class="span6" name="tanggal_lahir" id="tanggal_lahir" value="<?php echo $tanggal_lahir; ?>" placeholder="Tanggal Lahir">
			<?php
			}
			?>
			</div>
		  </div>
		  <div class="control-group">
			<label class="control-label" for="usia">Usia</label>
			<div class="controls">
			<?php
			if($st=="tambah")
			{
			?>
			  <input type="text" class="span6" name="usia" id="usia" value="<?php echo set_value('usia'); ?>" placeholder="Usia">
			<?php
			}
			else
			{
			?>
			  <input type="text" class="span6" name="usia" id="usia" value="<?php echo $usia; ?>" placeholder="Usia">
			<?php
			}
			?>
			</div>
		  </div>
		  <div class="control-group">
			<label class="control-label" for="alamat">Alamat</label>
			<div class="controls">
			<?php
			if($st=="tambah")
			{
			?>
				<textarea class="span6" style="outline:none; resize:none;" name="alamat" id="alamat" placeholder=
			  "Alamat"><?php echo set_value('alamat'); ?></textarea>
			<?php
			}
			else
			{
			?>
				<textarea class="span6" style="outline:none; resize:none;" name="alamat" id="alamat" placeholder=
			  "Alamat"><?php echo $alamat_pegawai; ?></textarea>
			<?php
			}
			?>
			</div>
		  </div>
        
        
    	</div>
        <div class="tab-pane fade in active" id="dtpangkat">
          <div class="control-group">
			<label class="control-label" for="nip">Jabatan</label>
			<div class="controls">
			<select data-placeholder="Status Pegawai" class="chzn-select" style="width:500px;" tabindex="2" name="id_golongan" id="id_golongan">
			<option value=""></option>
          			<option value=""></option>
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
        <div class="tab-pane fade in active" id="dtjabatan">
		  
        <div class="tab-pane fade in active" id="dtfoto">
        
          <div class="control-group">
			<label class="control-label" for="nip">Upload Foto</label>
			<div class="controls">
			<input type="file" class="span6" name="userfile" id="userfile" placeholder="Upload Foto">
			</div>
		</div>
	</div>
	
	
		  <div class="control-group">
			<div class="controls">
			  <button type="submit" class="btn btn-primary">Simpan Data</button>
			  <button type="reset" class="btn">Hapus Data</button>
			</div>
		  </div>
		  
		  
		  <input type="hidden" name="id_param" value="<?php echo $id_param; ?>">
		  <input type="hidden" name="st" value="<?php echo $st; ?>">
		  <input type="hidden" name="frame" value="frame">
		  <script src="http://localhost/sgmc/asset/js/chosen.jquery.js" type="text/javascript"></script>
			<script type="text/javascript"> 
				$(".chzn-select").chosen();
			</script>

		<?php echo form_close(); ?>

	</div>    
	
  </body>
</html>
