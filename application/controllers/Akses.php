<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use \PhpOffice\PhpSpreadsheet\Spreadsheet;
class Akses extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	    $this->load->helper('url');
	    if($this->session->userdata('logged_in_virtual')){
			$sess_data = $this->session->userdata('logged_in_virtual');
				$this->data = array(
					'id_user'						=> $sess_data['id_user'],
					'username' 						=> $sess_data['username'],
					'id_level' 						=> $sess_data['id_level'],
					'email' 						=> $sess_data['email'],
					'image' 						=> $sess_data['image'],
					'is_jobs' 						=> $sess_data['is_jobs'],
					'menu' 							=> $this->m_global->tampil_id($sess_data['id_level'],'menu','id_level'),
					'perusahaan' 					=> $this->m_global->tampil_asc('job_perusahaan','id'),
					'event' 						=> $this->m_global->tampil_event(),
				);			
		}else{
			redirect('akseslog','refresh');
		}
	}
	public function index()
	{
		$data = $this->data;
		$data['sidebar'] = 'dashboard';
		$data['nama_menu'] = 'Dashboard';
		$data['link'] = 'dashboard';
		$data['variable'] = 'dashboard';
		if ($data['id_level']==1) {
			$data['jum_lowongan'] = $this->m_global->tampil_jumlah_lowongan_all();
			$data['jum_pelamar'] = $this->m_global->tampil_jumlah_pelamar_all();
		}else{
			$data['jum_lowongan'] = $this->m_global->tampil_jumlah_lowongan($data['is_jobs']);
			$data['jum_pelamar'] = $this->m_global->tampil_jumlah_pelamar($data['is_jobs']);
		}
		$this->load->view('admin/dashboard', $data, FALSE);
	}
	public function dashboard()
	{
		$data = $this->data;
		$data['sidebar'] = 'dashboard';
		$data['nama_menu'] = 'Dashboard';
		$data['link'] = 'dashboard';
		$data['variable'] = 'dashboard';
		if ($data['id_level']==1) {
			$data['jum_lowongan'] = $this->m_global->tampil_jumlah_lowongan_all();
			$data['jum_pelamar'] = $this->m_global->tampil_jumlah_pelamar_all();
		}else{
			$data['jum_lowongan'] = $this->m_global->tampil_jumlah_lowongan($data['is_jobs']);
			$data['jum_pelamar'] = $this->m_global->tampil_jumlah_pelamar($data['is_jobs']);
		}
		$this->load->view('admin/dashboard', $data, FALSE);
	}
	public function perusahaan()
	{
		$data = $this->data;
		$data['sidebar'] = 'perusahaan';
		$data['nama_menu'] = 'Perusahaan';
		$data['link'] = 'perusahaan';
		$data['variable'] = 'perusahaan';
		$this->load->view('admin/perusahaan', $data, FALSE);
	}
	public function event()
	{
		$data = $this->data;
		$data['sidebar'] = 'event';
		$data['nama_menu'] = 'Event';
		$data['link'] = 'event';
		$data['variable'] = 'event';
		$this->load->view('admin/event', $data, FALSE);
	}
	public function ubah_password()
	{
		$data = $this->data;
		date_default_timezone_set('Asia/Jakarta');
		$data['sidebar'] = 'ubah_password';
		$data['variable'] = 'ubah_password';
		$data['link'] = 'ubah_password';
		$data['nama_menu'] = 'Ubah Password';
		$this->load->view('admin/ubah_password',$data);
	}
	public function akun_perusahaan()
	{
		$data = $this->data;
		date_default_timezone_set('Asia/Jakarta');
		$data['sidebar'] = 'akun_perusahaan';
		$data['variable'] = 'akun_perusahaan';
		$data['link'] = 'akun_perusahaan';
		$data['nama_menu'] = 'Akun Perusahaan';
		$data['perusahaan'] = $this->m_global->tampil_akun_perusahaan();
		$this->load->view('admin/akun_perusahaan',$data);
	}
	public function hasil_lamaran()
	{
		$data = $this->data;
		date_default_timezone_set('Asia/Jakarta');
		$data['sidebar'] = 'hasil_lamaran';
		$data['variable'] = 'hasil_lamaran';
		$data['link'] = 'hasil_lamaran';
		$data['nama_menu'] = 'Hasil Lamaran';
		$data['lamaran'] = $this->m_global->tampil_hasil_lamaran($data['is_jobs']);
		$this->load->view('admin/hasil_lamaran',$data);
	}
	public function detail_perusahaan($id='')
	{
		if ($id) {
			$data['cek'] = $this->m_global->tampil_id($id,'job_perusahaan','id');
			if (count($data['cek']) > 0) {
				$data = $this->data;
				date_default_timezone_set('Asia/Jakarta');
				$data['sidebar'] = 'detail_perusahaan';
				$data['variable'] = 'detail_perusahaan';
				$data['link'] = 'detail_perusahaan';
				$data['parent'] = $this->m_global->tampil_id($id,'job_perusahaan','id');	
				$data['nama_menu'] = $data['parent'][0]->nama_perusahaan;
				$this->load->view('admin/detail_perusahaan',$data);
			}
			
		}
	}
	public function lowongan($id='')
	{
		if ($id) {
			$data['cek'] = $this->m_global->tampil_id($id,'job_perusahaan','id');
			if (count($data['cek']) > 0) {
				$data = $this->data;
				date_default_timezone_set('Asia/Jakarta');
				$data['sidebar'] = 'detail_perusahaan';
				$data['variable'] = 'detail_perusahaan';
				$data['link'] = 'detail_perusahaan';
				$data['parent'] = $this->m_global->tampil_id($id,'job_perusahaan','id');
				$data['lowongan'] = $this->m_global->tampil_id($id,'job_lowongan','id_perusahaan');
				$data['nama_menu'] = 'Lowongan '.$data['parent'][0]->nama_perusahaan;
				$this->load->view('admin/lowongan',$data);
			}
		}
	}
	public function grafik_pengunjung($id='')
	{
		if ($id) {
			$data['cek'] = $this->m_global->tampil_id($id,'job_perusahaan','id');
			if (count($data['cek']) > 0) {
				$data = $this->data;
				date_default_timezone_set('Asia/Jakarta');
				$data['sidebar'] = 'detail_perusahaan';
				$data['variable'] = 'detail_perusahaan';
				$data['link'] = 'detail_perusahaan';
				$data['parent'] = $this->m_global->tampil_id($id,'job_perusahaan','id');
				$data['lowongan'] = $this->m_global->tampil_id($id,'job_lowongan','id_perusahaan');
				$data['nama_menu'] = 'Grafik '.$data['parent'][0]->nama_perusahaan;
				$this->load->view('admin/lowongan',$data);
			}
		}
	}
	public function tambah_event()
	{
		date_default_timezone_set('Asia/Jakarta');
		$data = $this->data;
		$foto = "EVENT_".time();
		$config['upload_path'] = './m_upload/event/';
	    $config['allowed_types'] = 'jpg|jpeg|png|pdf';
	    $config['max_size']      = '500000000';
	    $config['file_name'] = $foto;

	    $this->load->library('upload', $config);
	    $image_data = $this->upload->data();

	    if ($this->upload->do_upload('foto')){ 
	        $image_data 		= $this->upload->data();
		 	$dat['image'] 		= $image_data['file_name'];
		}
		$dat['link_join'] 	= $this->input->post("link_join");
		$dat['nama'] 	= $this->input->post("nama");
		$dat['id_perusahaan'] 	= $this->input->post("id_perusahaan");
		$dat['tgl'] 	= $this->input->post("tgl");
		$dat['describe'] 	= $this->input->post("describe");
		$dat['kode'] 	= rawurlencode($this->input->post("nama").' by '.$this->input->post('id_perusahaan'));
		$dat['user_by'] 	= $this->input->post("user_by");
		$dat['status'] 	= 1;
		$dat['created_at'] 	= date('Y-m-d H:i:s');
		$dat['updated_at'] 	= date('Y-m-d H:i:s');
	    $this->m_global->tambah('job_event',$dat);
	    $this->session->set_flashdata('notif', '<div class="alert alert-success"><b>Success!</b> Data berhasil ditambahkan!</div>');
	    redirect('akses/event');
		
	}
	public function ubah_event($id)
	{
		date_default_timezone_set('Asia/Jakarta');
		$data = $this->data;
		$foto = "EVENT_".time();
		$path 						= './m_upload/event/';
		$config['upload_path'] 		= $path;
		$config['allowed_types']	= 'jpg|jpeg|png';
		$config['max_size']     	= '50000';
		$config['file_name'] 		= $foto;

		$this->load->library('upload', $config);
		$image_data = $this->upload->data();

		if ($this->upload->do_upload('foto')){ 		
		    $image_data 			= $this->upload->data();
		    $file_lama				= $this->input->post('old_file');
			$dat['image'] 			= $image_data['file_name'];
			@unlink($path.$file_lama);
		}
		$dat['link_join'] 	= $this->input->post("link_join");
		$dat['nama'] 	= $this->input->post("nama");
		$dat['id_perusahaan'] 	= $this->input->post("id_perusahaan");
		$dat['tgl'] 	= $this->input->post("tgl");
		$dat['describe'] 	= $this->input->post("describe");
		$dat['kode'] 	= rawurlencode($this->input->post("nama").' by '.$this->input->post('id_perusahaan'));
		$dat['user_by'] 	= $this->input->post("user_by");
		$dat['updated_at'] 	= date('Y-m-d H:i:s');
	    $this->m_global->edit($id,'job_event',$dat,'id');
	    $this->session->set_flashdata('notif', '<div class="alert alert-success"><b>Success!</b> Data berhasil diubah!</div>');
	    redirect('akses/event');
		
	}
	public function ubah_perusahaan($id)
	{
		date_default_timezone_set('Asia/Jakarta');
		$data = $this->data;
		$foto = "LOGO_".time();
		$path 						= './m_upload/logo/';
		$config['upload_path'] 		= $path;
		$config['allowed_types']	= 'jpg|jpeg|png';
		$config['max_size']     	= '50000';
		$config['file_name'] 		= $foto;

		$this->load->library('upload', $config);
		$image_data = $this->upload->data();

		if ($this->upload->do_upload('foto')){ 		
		    $image_data 			= $this->upload->data();
		    $file_lama				= $this->input->post('old_file');
			$dat['logo'] 			= $image_data['file_name'];
			@unlink($path.$file_lama);
		}
		$dat['nama_perusahaan'] 	= $this->input->post("nama_perusahaan");
		$dat['caption'] 			= $this->input->post("caption");
		$dat['link_video'] 			= $this->input->post("link_video");
		$dat['no_telp'] 			= $this->input->post("no_telp");
		$dat['email'] 				= $this->input->post("email");
		$dat['home_analytics'] 		= $this->input->post("home_analytics");
		$dat['admin_analytics'] 	= $this->input->post("admin_analytics");
		$dat['uri'] 				= rawurlencode($this->input->post("nama_perusahaan"));
		$dat['var'] 				= preg_replace('/[^a-zA-Z0-9_]/s', '_',$this->input->post("nama_perusahaan"));
		$this->m_global->edit($id,'job_perusahaan',$dat,'id');
	    $this->session->set_flashdata('notif', '<div class="alert alert-success"><b>Success!</b> Data berhasil Diubah!</div>');
		redirect('akses/detail_perusahaan/'.$id);
	}
	public function tambah_lowongan($id)
	{
		date_default_timezone_set('Asia/Jakarta');
		$data = $this->data;
		$foto = "LOWONGAN_".time();
		$config['upload_path'] = './m_upload/lowongan/';
	    $config['allowed_types'] = 'jpg|jpeg|png|pdf';
	    $config['max_size']      = '500000000';
	    $config['file_name'] = $foto;

	    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < 100; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }

	    $this->load->library('upload', $config);
	    $image_data = $this->upload->data();

	    if ($this->upload->do_upload('foto')){ 
	        $image_data 		= $this->upload->data();
		 	$dat['image'] 		= $image_data['file_name'];
		}
		$dat['nama_lowongan'] 		= $this->input->post("nama_lowongan");
		$dat['penempatan'] 			= $this->input->post("penempatan");
		$dat['describe'] 			= $this->input->post("describe");
		$dat['created_at'] 			= date('Y-m-d H:i:s');
		$dat['updated_at'] 			= date('Y-m-d H:i:s');
		$dat['status'] 				= 1;
		$dat['id_perusahaan'] 		= $id;
		$dat['kode'] 				= rawurlencode($this->input->post("nama_lowongan")).$randomString;
		$this->m_global->tambah('job_lowongan',$dat);
	    $this->session->set_flashdata('notif', '<div class="alert alert-success"><b>Success!</b> Data berhasil ditambahkan!</div>');
	    redirect('akses/lowongan/'.$id);
	}
	public function ubah_lowongan($id)
	{
		date_default_timezone_set('Asia/Jakarta');
		$data = $this->data;
		$foto = "LOWONGAN_".time();
		$path 						= './m_upload/lowongan/';
		$config['upload_path'] 		= $path;
		$config['allowed_types']	= 'jpg|jpeg|png';
		$config['max_size']     	= '50000';
		$config['file_name'] 		= $foto;

		$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < 100; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }

		$this->load->library('upload', $config);
		$image_data = $this->upload->data();
		if ($this->upload->do_upload('gambar')){ 		
		    $image_data 			= $this->upload->data();
		    $file_lama				= $this->input->post('old_file');
			$dat['image'] 			= $image_data['file_name'];
			@unlink($path.$file_lama);
		}
		$dat['nama_lowongan'] 		= $this->input->post("nama_lowongan");
		$dat['penempatan'] 			= $this->input->post("penempatan");
		$dat['describe'] 			= $this->input->post("describe");
		$dat['kode'] 				= rawurlencode($this->input->post("nama_lowongan")).$randomString;
		$dat['updated_at'] 			= date('Y-m-d H:i:s');
		$this->m_global->edit($id,'job_lowongan',$dat,'id');
	    $this->session->set_flashdata('notif', '<div class="alert alert-success"><b>Success!</b> Data berhasil Diubah!</div>');
	    $data['lowongan'] = $this->m_global->tampil_id($id,'job_lowongan','id');
		redirect('akses/lowongan/'.$data['lowongan'][0]->id_perusahaan);
	}
	public function doUbahPassword($id_user)
	{
		$data = $this->data;
		foreach ($data['user'] as $key) {
			if ($key->id_user == $id_user) {
				$password_lama_ada = $key->password;
			}
		}
		if ($password_lama_ada == md5($this->input->post('password_lama'))) {
			$dat = array(
		        "password"=> md5($this->input->post('password_baru')),
		    );
		    $this->m_global->edit($id_user,'user',$dat,'id_user');
		    $this->session->sess_destroy();
		    $this->session->set_flashdata('notif', '<div class="alert alert-success"><b>Success!</b> Password berhasil diubah!</div>');
			redirect('akseslog');
		}else{
			$this->session->set_flashdata('notif', '<div class="alert alert-danger"><b>Gagal!</b> Password Tidak Cocok!</div>');
	    	redirect('akses/ubah_password');
		}
	}

	public function tambah_perusahaan()
    {
    	$extension = pathinfo(str_replace( ' ', '_', $_FILES['file']['name']), PATHINFO_EXTENSION);
        if($extension == 'csv'){
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
        } elseif($extension == 'xlsx') {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        } else {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
        }
        // file path
        $spreadsheet = $reader->load(str_replace( ' ', '_', $_FILES['file']['tmp_name']));
        $allDataInSheet = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
    
        // array Count
        $arrayCount = count($allDataInSheet);
        $flag = 0;
        $createArray = array('nama_perusahaan','caption','link_video','no_telp','email');
        $makeArray = array(
        	'nama_perusahaan' => 'nama_perusahaan',
        	'caption' => 'caption',
        	'link_video' => 'link_video',
        	'no_telp' => 'no_telp',
        	'email' => 'email',
    	);
        $SheetDataKey = array();
        foreach ($allDataInSheet as $dataInSheet) {
            foreach ($dataInSheet as $key => $value) {
                if (in_array(trim($value), $createArray)) {
                    $value = preg_replace('/\s+/', '', $value);
                    $SheetDataKey[trim($value)] = $key;
                } 
            }
        }
        $dataDiff = array_diff_key($makeArray, $SheetDataKey);
        if (empty($dataDiff)) {
            $flag = 1;
        }
        // match excel sheet column
        // if ($flag == 1) {
            for ($i = 2; $i <= $arrayCount; $i++) {
                // $addresses = array();
                if ($allDataInSheet[$i][$SheetDataKey['nama_perusahaan']]) {
                	$data = array(
	                    'nama_perusahaan' => $allDataInSheet[$i][$SheetDataKey['nama_perusahaan']],
	                    'caption' => $allDataInSheet[$i][$SheetDataKey['caption']],
	                    'link_video' => $allDataInSheet[$i][$SheetDataKey['link_video']],
	                    'no_telp' => $allDataInSheet[$i][$SheetDataKey['no_telp']],
	                    'email' => $allDataInSheet[$i][$SheetDataKey['email']],
	                    'uri' => rawurlencode($allDataInSheet[$i][$SheetDataKey['nama_perusahaan']]),
	                    'var' => preg_replace('/[^a-zA-Z0-9_]/s', '_',$allDataInSheet[$i][$SheetDataKey['nama_perusahaan']]),
	                );
	                $this->db->insert("job_perusahaan",$data);
                }
            }   
        // }
        $this->session->set_flashdata('notif', '<div class="alert alert-success"><b>PROSES IMPORT BERHASIL!</b> Data berhasil diimport!</div>');
        redirect('akses/perusahaan/');
    }
    public function tambah_akun_perusahaan()
    {
    	$extension = pathinfo(str_replace( ' ', '_', $_FILES['file']['name']), PATHINFO_EXTENSION);
        if($extension == 'csv'){
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
        } elseif($extension == 'xlsx') {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        } else {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
        }
        // file path
        $spreadsheet = $reader->load(str_replace( ' ', '_', $_FILES['file']['tmp_name']));
        $allDataInSheet = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
    
        // array Count
        $arrayCount = count($allDataInSheet);
        $flag = 0;
        $createArray = array('nama_perusahaan','username','is_jobs');
        $makeArray = array(
        	'nama_perusahaan' => 'nama_perusahaan',
        	'username' => 'username',
        	'is_jobs' => 'is_jobs',
    	);
        $SheetDataKey = array();
        foreach ($allDataInSheet as $dataInSheet) {
            foreach ($dataInSheet as $key => $value) {
                if (in_array(trim($value), $createArray)) {
                    $value = preg_replace('/\s+/', '', $value);
                    $SheetDataKey[trim($value)] = $key;
                } 
            }
        }
        $dataDiff = array_diff_key($makeArray, $SheetDataKey);
        if (empty($dataDiff)) {
            $flag = 1;
        }
        // match excel sheet column
        // if ($flag == 1) {
            for ($i = 2; $i <= $arrayCount; $i++) {
                // $addresses = array();
                if ($allDataInSheet[$i][$SheetDataKey['nama_perusahaan']]) {
                	$data = array(
	                    'username' => $allDataInSheet[$i][$SheetDataKey['username']],
	                    'is_jobs' => $allDataInSheet[$i][$SheetDataKey['is_jobs']],
	                    'password' => md5($allDataInSheet[$i][$SheetDataKey['username']]),
	                    'kode' => md5($allDataInSheet[$i][$SheetDataKey['username']]),
	                    'is_active' => 1,
	                    'id_level' => 3,
	                );
	                $this->db->insert("user",$data);
                }
            }   
        // }
        $this->session->set_flashdata('notif', '<div class="alert alert-success"><b>PROSES IMPORT BERHASIL!</b> Data berhasil diimport!</div>');
        redirect('akses/akun_perusahaan/');
    }

    public function download_lamaran()
    {
	    $extension = 'xlsx';
	    $this->load->helper('download');  
	    // $data = array();
	    $data = $this->data;
	    $lamaran = $this->m_global->tampil_hasil_lamaran_sort($data['is_jobs']);
	    $fileName = 'Hasil Pelamar'; 
	    $spreadsheet = new Spreadsheet();
	    $sheet = $spreadsheet->getActiveSheet();
	    
	    $sheet->setCellValue('A1', 'No');
        $sheet->setCellValue('B1', 'Email');
        $sheet->setCellValue('C1', 'Surat Lamaran');
        $sheet->setCellValue('D1', 'Waktu Lamar');
        $sheet->setCellValue('E1', 'Lowongan');
        $sheet->setCellValue('F1', 'CV (Klik Cell untuk Download CV');
        $sheet->setCellValue('G1', 'Nama');
        $sheet->setCellValue('H1', 'Tanggal Lahir');
        $sheet->setCellValue('I1', 'Gender');
        $sheet->setCellValue('J1', 'Telp');
        $sheet->setCellValue('K1', 'Institusi');
        $sheet->setCellValue('L1', 'Jurusan');
        $sheet->setCellValue('M1', 'Prodi');
        $sheet->setCellValue('N1', 'Kualifikasi');
        $sheet->setCellValue('O1', 'IPK');
        $sheet->setCellValue('P1', 'TOEFL');
        $sheet->setCellValue('Q1', 'TOEIC');
        $sheet->setCellValue('R1', 'PAS FOTO (Klik Cell untuk Download Pas Foto)');
	 
	        $rowCount = 2;
	        $a = 1;
	        foreach($lamaran as $key) { 
	            $sheet->setCellValue('A' . $rowCount, $a);
	            $sheet->setCellValue('B' . $rowCount, $key->email);
	            $sheet->setCellValue('C' . $rowCount, $key->surat_lamaran);
	            $sheet->setCellValue('D' . $rowCount, $key->waktu_lamar);
	            $sheet->setCellValue('E' . $rowCount, $key->nama_lowongan);
	            $sheet->setCellValue('F' . $rowCount, $key->cv);
	            $spreadsheet->getActiveSheet()->getCell('F'.$rowCount)->getHyperlink()->setUrl(base_url().'m_upload/cv/'.$key->cv);
	            $sheet->setCellValue('G' . $rowCount, $key->name);
	            $sheet->setCellValue('H' . $rowCount, $key->dob);
	            $sheet->setCellValue('I' . $rowCount, $key->gender);
	            $sheet->setCellValue('J' . $rowCount, $key->telp);
	            $sheet->setCellValue('K' . $rowCount, $key->institusi);
	            $sheet->setCellValue('L' . $rowCount, $key->jurusan);
	            $sheet->setCellValue('M' . $rowCount, $key->fakultas);
	            $sheet->setCellValue('N' . $rowCount, $key->kualifikasi);
	            $sheet->setCellValue('O' . $rowCount, $key->ipk);
	            $sheet->setCellValue('P' . $rowCount, $key->toefl);
	            $sheet->setCellValue('Q' . $rowCount, $key->toeic);
	            $sheet->setCellValue('R' . $rowCount, $key->pas_foto);
	            $spreadsheet->getActiveSheet()->getCell('R'.$rowCount)->getHyperlink()->setUrl(base_url().'m_upload/pas_foto/'.$key->pas_foto);
	            $rowCount++;
	            $a++;
	        }
	        $spreadsheet->getActiveSheet()->getColumnDimension('A')->setWidth(10);
	        $spreadsheet->getActiveSheet()->getColumnDimension('B')->setWidth(50);
	        $spreadsheet->getActiveSheet()->getColumnDimension('C')->setWidth(50);
	        $spreadsheet->getActiveSheet()->getColumnDimension('D')->setWidth(10);
	        $spreadsheet->getActiveSheet()->getColumnDimension('E')->setWidth(20);
	        $spreadsheet->getActiveSheet()->getColumnDimension('F')->setWidth(50);
	        $spreadsheet->getActiveSheet()->getColumnDimension('G')->setWidth(50);
	        $spreadsheet->getActiveSheet()->getColumnDimension('H')->setWidth(50);
	        $spreadsheet->getActiveSheet()->getColumnDimension('I')->setWidth(50);
	        $spreadsheet->getActiveSheet()->getColumnDimension('J')->setWidth(50);
	        $spreadsheet->getActiveSheet()->getColumnDimension('K')->setWidth(50);
	        $spreadsheet->getActiveSheet()->getColumnDimension('L')->setWidth(50);
	        $spreadsheet->getActiveSheet()->getColumnDimension('M')->setWidth(50);
	        $spreadsheet->getActiveSheet()->getColumnDimension('N')->setWidth(50);
	        $spreadsheet->getActiveSheet()->getColumnDimension('O')->setWidth(50);
	        $spreadsheet->getActiveSheet()->getColumnDimension('P')->setWidth(50);
	        $spreadsheet->getActiveSheet()->getColumnDimension('Q')->setWidth(50);
	        $spreadsheet->getActiveSheet()->getColumnDimension('R')->setWidth(50);
	    $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
	    $fileName = $fileName.'.xlsx';
	    
	 
	    $this->output->set_header('Content-Type: application/vnd.ms-excel');
	    $this->output->set_header("Content-type: application/csv");
	    $this->output->set_header('Cache-Control: max-age=0');
	    $writer->save(ROOT_UPLOAD_PATH.$fileName); 
	    //redirect(HTTP_UPLOAD_PATH.$fileName); 
	    $filepath = file_get_contents(ROOT_UPLOAD_PATH.$fileName);
	    force_download($fileName, $filepath);
    }

}

/* End of file Akses.php */
/* Location: ./application/controllers/Akses.php */