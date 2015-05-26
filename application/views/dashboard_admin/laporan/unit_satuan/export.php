<?php
$nama_file = date('Y-m-d')."_laporan_pegawai_unit_satuan.xls";    
header("Pragma: public");   
header("Expires: 0");   
header("Cache-Control: must-revalidate, post-check=0,pre-check=0");     
header("Content-Type: application/force-download");     
header("Content-Type: application/octet-stream");   
header("Content-Type: application/download");   
header("Content-Disposition: attachment;filename=".$nama_file."");  
header("Content-Transfer-Encoding: binary ");
?>
<table>
<tr>
<td></td>
<td align="center">Laporan Data Pegawai</td>
</tr>
<tr>
<td></td>
<td>
  <table cellpadding="8" style="border-collapse:collapse;" border="1">
      <tr height="40" style="background-color:#EA7D57;">
        <td>Nomor</td>
        <td>NIP</td>
        <td>Nomor Kartu Pegawai</td>
        <td>Nama Pegawai</td>
        <td>Tempat/Tanggal Lahir</td>
        <td>Jenis Kelamin</td>
        <td>Agama</td>
        <td>Usia</td>
        <td>Status Pegawai</td>
        <td>Alamat</td>
        <td>Golongan</td>
      </tr>
	<?php
		$no=1;
		foreach($data_pegawai->result_array() as $dp)
		{
	?>
      <tr height="35">
        <td><?php echo $no; ?></td>
        <td><?php echo $dp['nip'].'<font color="white">_</font>'; ?></td>
        <td><?php echo $dp['no_kartu_pegawai']; ?></td>
        <td><?php echo $dp['nama_pegawai']; ?></td>
        <td><?php echo $dp['tempat_lahir'].' - '.$dp['tanggal_lahir']; ?></td>
        <td><?php echo $dp['jenis_kelamin']; ?></td>
        <td><?php echo $dp['agama']; ?></td>
        <td><?php echo $dp['usia']; ?></td>
        <td><?php echo $dp['nama_status']; ?></td>
        <td><?php echo $dp['alamat']; ?></td>
        <td><?php echo $dp['golongan']; ?></td>
      </tr>
	 <?php
	 		$no++;
	 	}
	 ?>
  </table>
</td>
</tr>
</table>