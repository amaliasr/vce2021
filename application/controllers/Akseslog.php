<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akseslog extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	    $this->load->helper('url');
		$this->data = array(
			'menu' 		=> $this->m_global->tampil_asc('menu','id_menu'),
		);
	}
	public function index()
	{
		$data = $this->data;
		$this->load->view('login/login',$data);
	}
	public function DoLogin()
	{
		$this->load->library('session');
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		if ($username != '' OR $password != '') {

			$login = $this->m_global->login_admin($username,$password);

			if ($login->num_rows() == 1) {
				//set session
   				$_SESSION['logged_in_virtual'] = TRUE;
				foreach ($login->result() as $sess) {
					$sess_data['logged_in_virtual'] = 'LogIn';
					$sess_data['id_user'] = $sess->id_user; 
					$sess_data['id_level'] = $sess->id_level; 
					$sess_data['username'] = $sess->username; 
					$sess_data['email'] = $sess->email; 
					$sess_data['image'] = $sess->image;
					$sess_data['is_jobs'] = $sess->is_jobs;
				}
				$this->session->set_userdata('logged_in_virtual',$sess_data);
				redirect('akses','refresh');
			}
			else{
				$this->session->set_flashdata('notif', '<div class="alert alert-danger"><b>Gagal!</b> Username atau Password anda salah</div>');
				redirect(site_url('akseslog'),'refresh');
			}
		}else{
			$this->session->set_flashdata('notif', '<div class="alert alert-danger"><b>Gagal!</b> Username atau Password anda salah</div>');
			redirect(site_url('akseslog'),'refresh');
		}
		
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('akseslog','refresh');
	}
	public function register()
	{
		$data = $this->data;
		$this->load->view('login/register',$data);
	}
	public function doregister()
	{
		$data = $this->data;
		// buat username
		$kalimat = $this->input->post("nama_lengkap");
		$username_akun = strtolower($kalimat);
		$specChars = array(
			' ' => ''
		);
		foreach ($specChars as $k => $v) {
		    $username_akun = str_replace($k, $v, $username_akun);
		}

		// buat password
		$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < 6; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
	   
	    // $message = "How are you";
	    $data['username'] = $username_akun;
	    $data['password'] = $randomString;
	    $message = $this->load->view('login/template_email',$data,true);
	    $email = $this->input->post('email');//email penerima

	    $mail = new PHPMailer(true);
		try {
		    $mail->isSMTP();
		    $mail->Host = 'in-v3.mailjet.com'; // host
		    $mail->SMTPAuth = true;
		    $mail->Username = '8bf9640d6761ac6b6001d364c970857a'; //username
		    $mail->Password = 'c716e4ca481e3f159c3a3c60d5c7f5ed'; //password
		    $mail->SMTPSecure = 'tls';
		    $mail->Port = 587; //smtp port
		   
		    $mail->setFrom('amaliayuya@gmail.com', 'AKSES MASUK KRESNO.ID');
		    $mail->addAddress($email, '');
		  
		    $mail->isHTML(true);
		    $mail->Subject = 'Username Password Masuk Akun';
		    $mail->Body    = $this->load->view('login/template_email',$data,true);
		  
		    $mail->send();
		    // insert admin
		    $data2 = array(
		        "nama_lengkap"=> $this->input->post('nama_lengkap'),
		        "email"=> $this->input->post('email'),
		        "level"=> $this->input->post('var_level'),
		        "username"=> $username_akun,
		        "password"=> md5($randomString),
		        "status"=> 'active',
		    );
		    $this->db->insert("user",$data2);
	        $this->session->set_flashdata('notif', '<div class="alert alert-success" style="text-shadow: none;"><b>Sukses!</b> Cek Email Anda untuk mendapatkan Username dan Password</div>');
	        redirect('akseslog');
		} catch (Exception $e) {
		    $this->session->set_flashdata('notif', '<div class="alert alert-danger" style="text-shadow: none;"><b>Gagal!</b> Cek Email anda Apakah sudah benar?</div>');
	        redirect('akseslog/register');
		}
	}

}

/* End of file Logadmin.php */
/* Location: ./application/controllers/Logadmin.php */