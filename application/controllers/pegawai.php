<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	public function index()
	{
		header('location:'.base_url().'');
	}

	public function detail()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="administrator")
		{
			$d['judul_lengkap'] = $this->config->item('nama_aplikasi_full');
			$d['judul_pendek'] = $this->config->item('nama_aplikasi_pendek');
			$d['instansi'] = $this->config->item('nama_instansi');
			$d['credit'] = $this->config->item('credit_aplikasi');
			$d['alamat'] = $this->config->item('alamat_instansi');
			
			$id['id_pegawai'] = $this->uri->segment(3);
			$this->session->set_userdata($id);
			$data_pegawai = $this->db->get_where("tbl_data_pegawai",$id);
			
			if($data_pegawai->num_rows()>0)
			{
				$q = $this->db->get_where("tbl_data_pegawai",$id);
				$set_detail = $q->row();
				$this->session->set_userdata("nama_pegawai",$set_detail->nama_pegawai);
				
				foreach($q->result() as $data)
				{
					$d['id_param'] = $data->id_pegawai;
					$d['nip'] = $data->nip;
					$d['no_kartu_pegawai'] = $data->no_kartu_pegawai;
					$d['nama_pegawai'] = $data->nama_pegawai;
					$d['tempat_lahir'] =  $data->tempat_lahir;
					$d['tanggal_lahir'] = $data->tanggal_lahir;
					$d['jenis_kelamin'] = $data->jenis_kelamin;
					$d['agama'] = $data->agama;
					$d['usia'] =  $data->usia;
					$d['status_pegawai'] = $data->status_pegawai;
					$d['alamat_pegawai'] = $data->alamat;
					$d['id_golongan'] = $data->id_golongan;
					$d['foto'] = $data->foto;
				}
				
				$d['st'] = "edit";
				$d['mst_status_pegawai'] = $this->db->get('tbl_master_status_pegawai');
				$d['mst_golongan'] = $this->db->get('tbl_master_golongan');
				$d['mst_stts_jabatan'] = $this->db->get('tbl_master_status_jabatan');
				$d['mst_jabatan'] = $this->db->get('tbl_master_jabatan');
				
				$this->load->view('dashboard_admin/pegawai/detail_pegawai',$d);
			}
			else
			{
				header('location:'.base_url().'');
			}
		}
		else
		{
			header('location:'.base_url().'');
		}
	}

	public function tambah()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="administrator")
		{
			$d['id_param'] = "";
			$d['nip'] = "";
			$d['no_kartu_pegawai'] = "";
			$d['nama_pegawai'] = "";
			$d['tempat_lahir'] = "";
			$d['tanggal_lahir'] = "";
			$d['jenis_kelamin'] = "";
			$d['agama'] = "";
			$d['usia'] = "";
			$d['status_pegawai'] = "";
			$d['alamat'] = "";
			$d['id_golongan'] = "";

			$d['st'] = "tambah";
			$d['mst_status_pegawai'] = $this->db->get('tbl_master_status_pegawai');
			$d['mst_golongan'] = $this->db->get('tbl_master_golongan');
			$d['mst_stts_jabatan'] = $this->db->get('tbl_master_status_jabatan');
			$d['mst_jabatan'] = $this->db->get('tbl_master_jabatan');

			$this->load->view('dashboard_admin/pegawai/input',$d);
		}
		else
		{
			header('location:'.base_url().'');
		}
	}

	public function hapus()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="administrator")
		{
			$id = $this->uri->segment(3);
			$this->db->query("delete from tbl_data_pegawai where id_pegawai = '$id'");
			// $id['id_pegawai'] = $this->session->userdata('kode_pegawai');
			// $this->db->delete("tbl_data_pegawai",$id);
			
			header('location:'.base_url().'');
		}
		else
		{
			header('location:'.base_url().'');
		}
	}

	public function edit()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="administrator")
		{
			$d['judul_lengkap'] = $this->config->item('nama_aplikasi_full');
			$d['judul_pendek'] = $this->config->item('nama_aplikasi_pendek');
			$d['instansi'] = $this->config->item('nama_instansi');
			$d['credit'] = $this->config->item('credit_aplikasi');
			$d['alamat'] = $this->config->item('alamat_instansi');
			
			$id['kode_pegawai'] = $this->uri->segment(3);
			$this->session->set_userdata($id);
			$kode['id_pegawai'] = $this->session->userdata('kode_pegawai');
			
			$q = $this->db->get_where("tbl_data_pegawai",$kode);
			$set_detail = $q->row();
			$this->session->set_userdata("nama_pegawai",$set_detail->nama_pegawai);
			
			foreach($q->result() as $data)
			{
				$d['id_param'] = $data->id_pegawai;
				$d['nip'] = $data->nip;
				$d['no_kartu_pegawai'] = $data->no_kartu_pegawai;
				$d['nama_pegawai'] = $data->nama_pegawai;
				$d['tempat_lahir'] =  $data->tempat_lahir;
				$d['tanggal_lahir'] = $data->tanggal_lahir;
				$d['jenis_kelamin'] = $data->jenis_kelamin;
				$d['agama'] = $data->agama;
				$d['usia'] =  $data->usia;
				$d['status_pegawai'] = $data->status_pegawai;
				$d['alamat_pegawai'] =  $data->alamat;
				$d['id_golongan'] = $data->id_golongan;
				$d['foto'] = $data->foto;
			}
			
			$d['st'] = "edit";
			$d['mst_status_pegawai'] = $this->db->get('tbl_master_status_pegawai');
			$d['mst_golongan'] = $this->db->get('tbl_master_golongan');
			$d['mst_stts_jabatan'] = $this->db->get('tbl_master_status_jabatan');
			$d['mst_jabatan'] = $this->db->get('tbl_master_jabatan');

			$this->load->view('dashboard_admin/master/header',$d);
			$this->load->view('dashboard_admin/master/bg_pegawai');
		}
		else
		{
			header('location:'.base_url().'');
		}
	}
	
	public function simpan()
	{
		if($this->session->userdata('logged_in')!="" && $this->session->userdata('stts')=="administrator")
		{
			$d['judul_lengkap'] = $this->config->item('nama_aplikasi_full');
			$d['judul_pendek'] = $this->config->item('nama_aplikasi_pendek');
			$d['instansi'] = $this->config->item('nama_instansi');
			$d['credit'] = $this->config->item('credit_aplikasi');
			$d['alamat'] = $this->config->item('alamat_instansi');
			
			$this->form_validation->set_rules('nip', 'NIP', 'trim|required');
			$this->form_validation->set_rules('no_kartu_pegawai', 'Nomor Kartu Pegawai', 'trim|required');
			$this->form_validation->set_rules('nama_pegawai', 'Nama Pegawai', 'trim|required');
			$this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'trim|required');
			$this->form_validation->set_rules('tanggal_lahir', 'Tanggal Lahir', 'trim|required');
			$this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'trim|required');
			$this->form_validation->set_rules('agama', 'Agama', 'trim|required');
			$this->form_validation->set_rules('usia', 'Usia', 'trim|required');
			$this->form_validation->set_rules('status_pegawai', 'Status Pegawai', 'trim|required');
			$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
			$this->form_validation->set_rules('id_golongan', 'Jabatan', 'trim|required');

			$id['id_pegawai'] = $this->input->post("id_param");
			$st_frame = $this->input->post("frame");
			
			if ($this->form_validation->run() == FALSE)
			{
				$st = $this->input->post('st');
				if($st=="edit")
				{
					$q = $this->db->get_where("tbl_data_pegawai",$id);
					foreach($q->result() as $dt)
					{
						$d['id_param'] = $dt->id_pegawai;
						$d['nip'] = $dt->nip;
						$d['no_kartu_pegawai'] = $dt->no_kartu_pegawai;
						$d['nama_pegawai'] = $dt->nama_pegawai;
						$d['tempat_lahir'] = $dt->tempat_lahir;
						$d['tanggal_lahir'] = $dt->tanggal_lahir;
						$d['jenis_kelamin'] = $dt->jenis_kelamin;
						$d['agama'] = $dt->agama;
						$d['usia'] = $dt->usia;
						$d['status_pegawai'] = $dt->status_pegawai;
						$d['alamat_pegawai'] = $dt->alamat;
						$d['id_golongan'] = $dt->id_golongan;
						$d['foto'] = $dt->foto;
						
						$d['mst_status_pegawai'] = $this->db->get('tbl_master_status_pegawai');
						$d['mst_golongan'] = $this->db->get('tbl_master_golongan');
						$d['mst_stts_jabatan'] = $this->db->get('tbl_master_status_jabatan');
						$d['mst_jabatan'] = $this->db->get('tbl_master_jabatan');
						
					}
					$d['st'] = $st;
					$this->load->view('dashboard_admin/master/header',$d);
					$this->load->view('dashboard_admin/master/bg_pegawai');
				}
				else if($st=="tambah")
				{
					$d['id_param'] = "";
					$d['nip'] = "";
					$d['no_kartu_pegawai'] = "";
					$d['nama_pegawai'] = "";
					$d['tempat_lahir'] = "";
					$d['tanggal_lahir'] = "";
					$d['jenis_kelamin'] = "";
					$d['agama'] = "";
					$d['usia'] = "";
					$d['status_pegawai'] = "";
					$d['alamat_pegawai'] = ""; 
					$d['id_golongan'] = "";
					
					$d['st'] = $st;
					$d['mst_status_pegawai'] = $this->db->get('tbl_master_status_pegawai');
					$d['mst_golongan'] = $this->db->get('tbl_master_golongan');
					$d['mst_stts_jabatan'] = $this->db->get('tbl_master_status_jabatan');
					$d['mst_jabatan'] = $this->db->get('tbl_master_jabatan');
					
					$this->load->view('dashboard_admin/pegawai/input',$d);
				}
			}
			else
			{
				$st = $this->input->post('st');
				if($st=="edit")
				{
					$upd['nip'] = $this->input->post('nip');
					$upd['no_kartu_pegawai'] = $this->input->post('no_kartu_pegawai');
					$upd['nama_pegawai'] = $this->input->post('nama_pegawai');
					$upd['tempat_lahir'] = $this->input->post('tempat_lahir');
					$upd['tanggal_lahir'] = $this->input->post('tanggal_lahir');
					$upd['jenis_kelamin'] = $this->input->post('jenis_kelamin');
					$upd['agama'] = $this->input->post('agama');
					$upd['usia'] = $this->input->post('usia');
					$upd['status_pegawai'] = $this->input->post('status_pegawai');
					$upd['alamat'] = $this->input->post('alamat');
					$upd['id_golongan'] = $this->input->post('id_golongan');
	
					if(!empty($_FILES['userfile']['name']))
					{
						$acak=rand(00000000000,99999999999);
						$bersih=$_FILES['userfile']['name'];
						$nm=str_replace(" ","_","$bersih");
						$pisah=explode(".",$nm);
						$nama_murni_lama = preg_replace("/^(.+?);.*$/", "\\1",$pisah[0]);
						$nama_murni=date('Ymd-His');
						$ekstensi_kotor = $pisah[1];
						
						$file_type = preg_replace("/^(.+?);.*$/", "\\1", $ekstensi_kotor);
						$file_type_baru = strtolower($file_type);
						
						$ubah=$acak.'-'.$nama_murni; //tanpa ekstensi
						$n_baru = $ubah.'.'.$file_type_baru;
						
						$config['upload_path']	= "./asset/foto_pegawai/";
						$config['allowed_types']= 'gif|jpg|png|jpeg';
						$config['file_name'] = $n_baru;
						$config['max_size']     = '2500';
						$config['max_width']  	= '3000';
						$config['max_height']  	= '3000';
				 
						$this->load->library('upload', $config);
				 
						if ($this->upload->do_upload("userfile")) {
							$data	 	= $this->upload->data();
				 
							/* PATH */
							$source             = "./asset/foto_pegawai/".$data['file_name'] ;
							$destination_thumb	= "./asset/foto_pegawai/thumb/" ;
							$destination_medium	= "./asset/foto_pegawai/medium/" ;
				 
							// Permission Configuration
							chmod($source, 0777) ;
				 
							/* Resizing Processing */
							// Configuration Of Image Manipulation :: Static
							$this->load->library('image_lib') ;
							$img['image_library'] = 'GD2';
							$img['create_thumb']  = TRUE;
							$img['maintain_ratio']= TRUE;
				 
							/// Limit Width Resize
							$limit_medium   = 425 ;
							$limit_thumb    = 220 ;
				 
							// Size Image Limit was using (LIMIT TOP)
							$limit_use  = $data['image_width'] > $data['image_height'] ? $data['image_width'] : $data['image_height'] ;
				 
							// Percentase Resize
							if ($limit_use > $limit_medium || $limit_use > $limit_thumb) {
								$percent_medium = $limit_medium/$limit_use ;
								$percent_thumb  = $limit_thumb/$limit_use ;
							}
				 
							//// Making THUMBNAIL ///////
							$img['width']  = $limit_use > $limit_thumb ?  $data['image_width'] * $percent_thumb : $data['image_width'] ;
							$img['height'] = $limit_use > $limit_thumb ?  $data['image_height'] * $percent_thumb : $data['image_height'] ;
				 
							// Configuration Of Image Manipulation :: Dynamic
							$img['thumb_marker'] = '';
							$img['quality']      = '100%' ;
							$img['source_image'] = $source ;
							$img['new_image']    = $destination_thumb ;
				 
							// Do Resizing
							$this->image_lib->initialize($img);
							$this->image_lib->resize();
							$this->image_lib->clear() ;
				 
							////// Making MEDIUM /////////////
							$img['width']   = $limit_use > $limit_medium ?  $data['image_width'] * $percent_medium : $data['image_width'] ;
							$img['height']  = $limit_use > $limit_medium ?  $data['image_height'] * $percent_medium : $data['image_height'] ;
				 
							// Configuration Of Image Manipulation :: Dynamic
							$img['thumb_marker'] = '';
							$img['quality']      = '100%' ;
							$img['source_image'] = $source ;
							$img['new_image']    = $destination_medium ;
							
							$upd['foto'] = $data['file_name'];
				 
							// Do Resizing
							$this->image_lib->initialize($img);
							$this->image_lib->resize();
							$this->image_lib->clear() ;
						}
					}
					
					$this->db->update("tbl_data_pegawai",$upd,$id);
					
				
					//header("location:".base_url()."pegawai/edit/".$this->session->userdata("kode_pegawai")."");
					redirect(base_url()."dashboard_admin");
				}
				else if($st=="tambah")
				{
					$in['nip'] = $this->input->post('nip');
					$in['no_kartu_pegawai'] = $this->input->post('no_kartu_pegawai');
					$in['nama_pegawai'] = $this->input->post('nama_pegawai');
					$in['tempat_lahir'] = $this->input->post('tempat_lahir');
					$in['tanggal_lahir'] = $this->input->post('tanggal_lahir');
					$in['jenis_kelamin'] = $this->input->post('jenis_kelamin');
					$in['agama'] = $this->input->post('agama');
					$in['usia'] = $this->input->post('usia');
					$in['status_pegawai'] = $this->input->post('status_pegawai');
					$in['alamat'] = $this->input->post('alamat');
					$in['id_golongan'] = $this->input->post('id_golongan');
					
					if(!empty($_FILES['userfile']['name']))
					{
						$acak=rand(00000000000,99999999999);
						$bersih=$_FILES['userfile']['name'];
						$nm=str_replace(" ","_","$bersih");
						$pisah=explode(".",$nm);
						$nama_murni_lama = preg_replace("/^(.+?);.*$/", "\\1",$pisah[0]);
						$nama_murni=date('Ymd-His');
						$ekstensi_kotor = $pisah[1];
						
						$file_type = preg_replace("/^(.+?);.*$/", "\\1", $ekstensi_kotor);
						$file_type_baru = strtolower($file_type);
						
						$ubah=$acak.'-'.$nama_murni; //tanpa ekstensi
						$n_baru = $ubah.'.'.$file_type_baru;
						
						$config['upload_path']	= "./asset/foto_pegawai/";
						$config['allowed_types']= 'gif|jpg|png|jpeg';
						$config['file_name'] = $n_baru;
						$config['max_size']     = '2500';
						$config['max_width']  	= '3000';
						$config['max_height']  	= '3000';
				 
						$this->load->library('upload', $config);
				 
						if ($this->upload->do_upload("userfile")) {
							$data	 	= $this->upload->data();
				 
							/* PATH */
							$source             = "./asset/foto_pegawai/".$data['file_name'] ;
							$destination_thumb	= "./asset/foto_pegawai/thumb/" ;
							$destination_medium	= "./asset/foto_pegawai/medium/" ;
				 
							// Permission Configuration
							chmod($source, 0777) ;
				 
							/* Resizing Processing */
							// Configuration Of Image Manipulation :: Static
							$this->load->library('image_lib') ;
							$img['image_library'] = 'GD2';
							$img['create_thumb']  = TRUE;
							$img['maintain_ratio']= TRUE;
				 
							/// Limit Width Resize
							$limit_medium   = 425 ;
							$limit_thumb    = 220 ;
				 
							// Size Image Limit was using (LIMIT TOP)
							$limit_use  = $data['image_width'] > $data['image_height'] ? $data['image_width'] : $data['image_height'] ;
				 
							// Percentase Resize
							if ($limit_use > $limit_medium || $limit_use > $limit_thumb) {
								$percent_medium = $limit_medium/$limit_use ;
								$percent_thumb  = $limit_thumb/$limit_use ;
							}
				 
							//// Making THUMBNAIL ///////
							$img['width']  = $limit_use > $limit_thumb ?  $data['image_width'] * $percent_thumb : $data['image_width'] ;
							$img['height'] = $limit_use > $limit_thumb ?  $data['image_height'] * $percent_thumb : $data['image_height'] ;
				 
							// Configuration Of Image Manipulation :: Dynamic
							$img['thumb_marker'] = '';
							$img['quality']      = '100%' ;
							$img['source_image'] = $source ;
							$img['new_image']    = $destination_thumb ;
				 
							// Do Resizing
							$this->image_lib->initialize($img);
							$this->image_lib->resize();
							$this->image_lib->clear() ;
				 
							////// Making MEDIUM /////////////
							$img['width']   = $limit_use > $limit_medium ?  $data['image_width'] * $percent_medium : $data['image_width'] ;
							$img['height']  = $limit_use > $limit_medium ?  $data['image_height'] * $percent_medium : $data['image_height'] ;
				 
							// Configuration Of Image Manipulation :: Dynamic
							$img['thumb_marker'] = '';
							$img['quality']      = '100%' ;
							$img['source_image'] = $source ;
							$img['new_image']    = $destination_medium ;
							
							$in['foto'] = $data['file_name'];
				 
							// Do Resizing
							$this->image_lib->initialize($img);
							$this->image_lib->resize();
							$this->image_lib->clear() ;
						}
					}
					
					$this->db->insert("tbl_data_pegawai",$in);
					redirect(base_url()."dashboard_admin");
				}
			
			}
		}
		else
		{
			header('location:'.base_url().'');
		}
	}
}

/* End of file pegawai.php */
/* Location: ./application/controllers/pegawai.php */