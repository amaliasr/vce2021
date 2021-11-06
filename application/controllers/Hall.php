<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class Hall extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	    $this->load->helper('url');
		$this->data = array(
			// 'menu' 		=> $this->m_global->tampil_asc('menu','id_menu'),
		);
	}
	public function index()
	{
		$this->load->view('hall/index');
	}
	public function quickregister($email='')
	{
		if ($email) {
			$data['email'] = base64_decode($email);
			$this->load->view('hall/header');
			$this->load->view('hall/quick_register',$data);
			$this->load->view('hall/footer');
		}
		
	}
	public function kirim_email()
	{
		$email = $this->input->post("email");
		// buat password
		$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < 6; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
	   
	    // $message = "How are you";
	    $data['password'] = $randomString;
	    $data['email'] = $email;
	    $data['kode'] = md5($randomString);
	    $message = $this->load->view('hall/template_email',$data,true);

	    $mail = new PHPMailer(true);
		try {
		    $mail->isSMTP();
		    $mail->Host = 'in-v3.mailjet.com'; // host
		    $mail->SMTPAuth = true;
		    $mail->Username = '8bf9640d6761ac6b6001d364c970857a'; //username
		    $mail->Password = 'c716e4ca481e3f159c3a3c60d5c7f5ed'; //password
		    $mail->SMTPSecure = 'tls';
		    $mail->Port = 587; //smtp port
		   
		    $mail->setFrom('amaliayuya@gmail.com', 'Virtual Career Expo 2021 Universitas Brawijaya');
		    $mail->addAddress($email, '');
		  
		    $mail->isHTML(true);
		    $mail->Subject = 'KONFIRMASI AKUN VIRTUAL CAREER EXPO 2021';
		    $mail->Body    = $message;
		  
		    $mail->send();
		    // insert admin
		    $data2 = array(
		        "email"=> $email,
		        "password"=> md5($randomString),
		        "id_level"=> 2,
		        "is_confirm"=> 0,
		        "kode"=> md5($randomString),
		        "is_active" => 1
		    );
		    $insert = $this->db->insert("user",$data2);
		    echo json_encode($insert);
		}catch (Exception $e) {
		}
	}
	public function login()
	{
		$email = $this->input->post("email");
		$password = md5($this->input->post("password"));
		$login = $this->m_global->login_user($email,$password);
		if ($login->num_rows() == 1) {
			$this->load->library('session');
			$_SESSION['logged_in_hall'] = TRUE;
			foreach ($login->result() as $sess) {
				    $sess_data['logged_in_hall'] = 'LogIn';
					$sess_data['id_user'] = $sess->id_user; 
					$sess_data['id_level'] = $sess->id_level; 
					$sess_data['email'] = $sess->email;
					$sess_data['kode'] = $sess->kode;
			}
			$this->session->set_userdata('logged_in_hall',$sess_data);
			echo json_encode('success');
		}
	}
	public function confirm($kode='')
	{
		if ($kode) {
			$data['cek'] = $this->m_global->tampil_id_str($kode,'user','kode');
			if (count($data['cek'])>0) {
				$data2 = array(
			        "is_confirm"=> 1,
			    );
			    $this->load->library('session');
				    $_SESSION['logged_in_hall'] = TRUE;
				    $sess_data['logged_in_hall'] = 'LogIn';
					$sess_data['id_user'] = $data['cek'][0]->id_user; 
					$sess_data['id_level'] = $data['cek'][0]->id_level; 
					$sess_data['email'] = $data['cek'][0]->email;
					$sess_data['kode'] = $data['cek'][0]->kode;
				$this->session->set_userdata('logged_in_hall',$sess_data);
			    $this->m_global->edit($data['cek'][0]->id_user,'user',$data2,'id_user');
			    redirect('home','refresh');
			}
		}
		
	}

}

/* End of file Hall.php */
/* Location: ./application/controllers/Hall.php */