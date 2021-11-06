<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	    $this->load->helper('url');
	    if($this->session->userdata('logged_in_hall')){
			$sess_data = $this->session->userdata('logged_in_hall');
				$this->data = array(
					'id_user'						=> $sess_data['id_user'],
					'id_level' 						=> $sess_data['id_level'],
					'email' 						=> $sess_data['email'],
					'kode' 							=> $sess_data['kode'],
					'event_now' 					=> $this->m_global->tampil_event_now(),
				);			
		}else{
			redirect('hall','refresh');
		}
	}
	public function index()
	{
		$this->load->view('hall/hall');
	}
	public function perusahaan($link="")
	{
		$data = $this->data;
		if ($link) {
			$data['cek'] = $this->m_global->tampil_id($link,'job_perusahaan','uri');
			if (count($data['cek'])>0) {
				$data['lowongan'] = $this->m_global->tampil_lowongan($data['cek'][0]->id);
				$this->load->view('home/header');
				$this->load->view('home/perusahaan',$data);
				$this->load->view('home/footer');
			}
		}else{
			$data['perusahaan'] = $this->m_global->tampil_asc('job_perusahaan','nama_perusahaan');
			$this->load->view('home/header');
			$this->load->view('home/all_perusahaan',$data);
			$this->load->view('home/footer');
		}
	}
	public function detail_lowongan($link_lowongan='')
	{
		$data = $this->data;
		if ($link_lowongan) {
			$data['cek'] = $this->m_global->tampil_id($link_lowongan,'job_lowongan','kode');
			if (count($data['cek'])>0) {
				$data['saved'] = $this->m_global->tampil_cek_saved($data['cek'][0]->id,$data['id_user']);
				$this->load->view('home/header');
				$this->load->view('home/detail_lowongan',$data);
				$this->load->view('home/footer');
			}
		}
	}
		
	public function event()
	{
		$data = $this->data;
		$data['event'] = $this->m_global->tampil_event();
		$this->load->view('home/header');
		$this->load->view('home/event',$data);
		$this->load->view('home/footer');
	}
	public function tutorial()
	{
		$data = $this->data;
		$this->load->view('home/header');
		$this->load->view('home/tutorial',$data);
		$this->load->view('home/footer');
	}
	public function profil()
	{
		$data = $this->data;
		$data['provinces'] = $this->m_global->tampil_asc('provinces','id');
		$data['regencies'] = $this->m_global->tampil_asc('regencies','id');
		$data['user'] = $this->m_global->tampil_user($data['id_user']);
		$this->load->view('home/header');
		$this->load->view('home/profil',$data);
		$this->load->view('home/footer');
	}
	public function savedjob()
	{
		$data = $this->data;
		$data['save'] = $this->m_global->tampil_saved_jobs($data['id_user']);
		$this->load->view('home/header');
		$this->load->view('home/saved_jobs',$data);
		$this->load->view('home/footer');
	}
	public function last_apply()
	{
		$data = $this->data;
		$data['apply'] = $this->m_global->tampil_applied_jobs($data['id_user']);
		$this->load->view('home/header');
		$this->load->view('home/last_apply',$data);
		$this->load->view('home/footer');
	}
	public function simpan($id='')
	{
		$data = $this->data;
		if ($id) {
			$data['cek'] = $this->m_global->tampil_id($id,'job_lowongan','id');
			if (count($data['cek'])>0) {
				$dat = array(
					'id_lowongan' => $id,
					'id_user' => $data['id_user'],
				);
				$this->m_global->tambah('job_save',$dat);
				redirect('job/'.$data['cek'][0]->kode);
			}
		}
	}
	public function apply_lamaran($id='')
	{
		$data = $this->data;
		$data['warning'] = "";
		$data['status_lamaran'] = "";
		if ($id) {
			$data['cek'] = $this->m_global->tampil_id_str($id,'job_lowongan','kode');
			if (count($data['cek'])>0) {
				$data['apply'] = $this->m_global->tampil_cek_apply($data['cek'][0]->id,$data['id_user']);
				if (count($data['apply']) == 0) {
					$data['profile'] = $this->m_global->tampil_cek_profile($data['id_user']);
					if (count($data['profile']) == 0) {
						$data['warning'] = "Anda Belum Melengkapi Data dan CV Anda";
						$data['status_lamaran'] = "no";
					}else{
						$data['warning'] = "Terima Kasih, Data Anda Sudah Lengkap, Silahkan Langsung mengisi Surat Lamaran";
						$data['status_lamaran'] = "yes";
					}
				}else{
					$data['warning'] = "Anda Sudah Pernah Melamar untuk Lowongan Ini";
					$data['status_lamaran'] = "finish";
				}
				$data['id_lowongan'] = $data['cek'][0]->id;
				$this->load->view('home/header');
				$this->load->view('home/apply_lamaran',$data);
				$this->load->view('home/footer');
			}
		}
	}
	public function kirim_lamaran()
	{
		$data = $this->data;
		date_default_timezone_set("Asia/Jakarta");
		$dat = array(
			'id_lowongan' => $this->input->post("id_lowongan"),
			'surat_lamaran' => $this->input->post("surat_lamaran"),
			'id_user' => $data['id_user'],
			'waktu_lamar' => date('Y-m-d H:i:s'),
		);
		$insert =  $this->m_global->tambah('job_apply',$dat); 
        echo json_encode($insert);
	}
	public function province()
    {
    	$data = $this->data;
    	$id_province = $this->input->post("id_province");
    	$insert = $this->m_global->tampil_id($id_province,'regencies','province_id');
    	echo json_encode($insert);
    }
    public function simpan_profile()
	{
		$data = $this->data;
		date_default_timezone_set("Asia/Jakarta");
		$data['cek'] = $this->m_global->tampil_id($data['id_user'],'profile','id_user');
		$dat = array(
			'name' => $this->input->post("name"),
			'dob' => $this->input->post("dob"),
			'telp' => $this->input->post("telp"),
			'institusi' => $this->input->post("institusi"),
			'fakultas' => $this->input->post("fakultas"),
			'jurusan' => $this->input->post("jurusan"),
			'ipk' => $this->input->post("ipk"),
			'toefl' => $this->input->post("toefl"),
			'toeic' => $this->input->post("toeic"),
			'id_province' => $this->input->post("id_province"),
			'kota_asal' => $this->input->post("kota_asal"),
			'gender' => $this->input->post("gender"),
			'kualifikasi' => $this->input->post("kualifikasi"),
			'id_user' => $data['id_user'],
			'created_at'	=> date('Y-m-d H:i:s'),
			'updated_at' 	=> date('Y-m-d H:i:s'),
		);
		if (count($data['cek'])>0) {
			$insert = $this->m_global->edit($data['id_user'],'profile',$dat,'id_user');
		}else{
			$insert =  $this->m_global->tambah('profile',$dat);
		}
        echo json_encode($insert);
	}
	public function simpan_file()
	{
		$data = $this->data;
		date_default_timezone_set("Asia/Jakarta");
		$data['cek'] = $this->m_global->tampil_id($data['id_user'],'profile','id_user');
        $config['upload_path'] = './m_upload/pas_foto';
        $config['allowed_types'] = 'jpg|jpeg|png|gif|pdf';
        // $this->upload->initialize($config);
        $this->load->library('upload',$config);
        $image_data = $this->upload->data();

        if ($this->upload->do_upload('file')) {
            $dat = array(
            	'pas_foto' => $this->upload->data('file_name'),
            );
        }
        if (count($data['cek'])>0) {
			$insert = $this->m_global->edit($data['id_user'],'profile',$dat,'id_user');
		}else{
			$insert =  $this->m_global->tambah('profile',$dat);
		}
        echo json_encode($insert);
	}
	public function simpan_cv()
	{
		$data = $this->data;
		date_default_timezone_set("Asia/Jakarta");
		$data['cek'] = $this->m_global->tampil_id($data['id_user'],'profile','id_user');
        $config['upload_path'] = './m_upload/cv';
        $config['allowed_types'] = 'pdf|docx';
        // $this->upload->initialize($config);
        $this->load->library('upload',$config);
        $image_data = $this->upload->data();

        if ($this->upload->do_upload('file')) {
            $dat = array(
            	'cv' => $this->upload->data('file_name'),
            );
        }
        if (count($data['cek'])>0) {
			$insert = $this->m_global->edit($data['id_user'],'profile',$dat,'id_user');
		}else{
			$insert =  $this->m_global->tambah('profile',$dat);
		}
        echo json_encode($insert);
	}

}

/* End of file Template.php */
/* Location: ./application/controllers/Template.php */