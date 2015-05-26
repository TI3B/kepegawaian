<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class laporan_pegawai_unit_satuan extends CI_Controller {

	/*
		***	Controller : laporan_pegawai_unit_satuan.php
		***	by Gede Lumbung
		***	http://gedelumbung.com
	*/

	public function index()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="administrator")
		{
			$d['judul_lengkap'] = $this->config->item('nama_aplikasi_full');
			$d['judul_pendek'] = $this->config->item('nama_aplikasi_pendek');
			$d['instansi'] = $this->config->item('nama_instansi');
			$d['credit'] = $this->config->item('credit_aplikasi');
			$d['alamat'] = $this->config->item('alamat_instansi');
			
			$page=$this->uri->segment(3);
			$limit=$this->config->item('limit_data');
			if(!$page):
			$offset = 0;
			else:
			$offset = $page;
			endif;
			
			$d['tot'] = $offset;
			$tot_hal = $this->db->get("tbl_data_pegawai");
			$config['base_url'] = base_url() . 'dashboard_admin/index/';
			$config['total_rows'] = $tot_hal->num_rows();
			$config['per_page'] = $limit;
			$config['uri_segment'] = 3;
			$config['first_link'] = 'Awal';
			$config['last_link'] = 'Akhir';
			$config['next_link'] = 'Selanjutnya';
			$config['prev_link'] = 'Sebelumnya';
			$this->pagination->initialize($config);
			$d["paginator"] =$this->pagination->create_links();
			
			$d['data_pegawai'] = $this->db->query("select a.nip, a.nama_pegawai, a.agama, a.usia, a.jenis_kelamin, b.golongan, c.nama_status, a.id_pegawai from tbl_data_pegawai a left join tbl_master_golongan b on a.id_golongan=b.id_golongan
			left join tbl_master_status_pegawai c on a.status_pegawai=c.id_status_pegawai limit ".$offset.",".$limit."");
			
			$this->load->view('dashboard_admin/laporan/unit_satuan/home',$d);
		}
		else
		{
			header('location:'.base_url().'');
		}
	}

	public function export()
	{
	$page=$this->uri->segment(3);
			$limit=$this->config->item('limit_data');
			if(!$page):
			$offset = 0;
			else:
			$offset = $page;
			endif;
			
			$d['tot'] = $offset;
			$tot_hal = $this->db->get("tbl_data_pegawai");
			$config['base_url'] = base_url() . 'dashboard_admin/index/';
			$config['total_rows'] = $tot_hal->num_rows();
			$config['per_page'] = $limit;
			$config['uri_segment'] = 3;
			$config['first_link'] = 'Awal';
			$config['last_link'] = 'Akhir';
			$config['next_link'] = 'Selanjutnya';
			$config['prev_link'] = 'Sebelumnya';
			$this->pagination->initialize($config);
			$d["paginator"] =$this->pagination->create_links();
			
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="administrator")
		{
			$d['data_pegawai'] = $this->db->query("select a.nip, a.no_kartu_pegawai, a.tempat_lahir, a.tanggal_lahir, a.alamat, a.nama_pegawai, a.agama, a.usia, a.jenis_kelamin, b.golongan, c.nama_status, a.id_pegawai from tbl_data_pegawai a left join tbl_master_golongan b on a.id_golongan=b.id_golongan
			left join tbl_master_status_pegawai c on a.status_pegawai=c.id_status_pegawai limit ".$offset.",".$limit."");
			
			
			$this->load->view('dashboard_admin/laporan/unit_satuan/export',$d);
		}
		else
		{
			header('location:'.base_url().'');
		}
	}

	/*public function set()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="administrator")
		{
			$sel_lap1['id_unit_kerja'] = $this->input->post('id_unit_kerja');
			$sel_lap1['id_satuan_kerja'] = $this->input->post('id_satuan_kerja');
			$this->session->set_userdata($sel_lap1);
			header('location:'.base_url().'laporan_pegawai_unit_satuan');
		}
		else
		{
			header('location:'.base_url().'');
		}
	}*/
	
	function logout()
	{
		$this->session->sess_destroy();
		header('location:'.base_url().'');
	}
}

/* End of file laporan_pegawai_unit_satuan.php */
/* Location: ./application/controllers/laporan_pegawai_unit_satuan.php */