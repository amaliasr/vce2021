<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_global extends CI_Model {

	public function tampil($tabel,$primary_key){
		$this->db->from($tabel);
		$this->db->order_by($primary_key, 'DESC');
		$query = $this->db->get(); 
		return $query->result();
	}
	public function tampil_asc($tabel,$primary_key){
		$this->db->from($tabel);
		$this->db->order_by($primary_key, 'ASC');
		$query = $this->db->get(); 
		return $query->result();
	}
	public function tampil_edit($tabel,$primary_key){
		$this->db->from($tabel);
		// $this->db->order_by($primary_key, 'DESC');
		$query = $this->db->get(); 
		return $query->result();
	}	

	public function tampil_id($id,$tabel,$primary_key){
		$this->db->where($primary_key, $id);
		return $this->db->get($tabel)->result();
	}
	
	public function tampil_id_desc($id,$tabel,$primary_key,$id_primary){
		$this->db->where($primary_key, $id);
		$this->db->from($tabel);
		$this->db->order_by($id_primary, 'DESC');
		$query = $this->db->get(); 
		return $query->result();
	}

	public function tambah($tabel,$data){
		$this->db->insert($tabel,$data);
	}
	

	public function edit($id,$tabel,$data,$primary_key){
		$this->db->where($primary_key,$id);
		$this->db->update($tabel,$data);
	
	}
	public function edit_sosmed($id_usaha, $id_jenis_promosi, $data){
		$where = array('id_usaha' => $id_usaha , 'id_jenis_promosi' => $id_jenis_promosi);
		$this->db->where($where);
		$this->db->update('sosmed',$data);
	
	}

	public function hapus($id,$tabel,$primary_key){
		$this->db->where($primary_key, $id);
		$this->db->delete($tabel);
	}

	public function tampil_file($tabel,$primary_key,$id){
		$this->db->where($primary_key, $id);
		$query = $this->db->get($tabel);
		if ($query->num_rows()==1) {
			return $query->row();
		}
	}

	public function login($kode){
		$data = array(
				'kode' => $kode,
			);
		
		$this->db->where($data);
		return $this->db->get('user');
	}

	public function login_admin($username,$password){
		$data = array(
				'username' => $username,
				'password' => $password,
			);
		
		$this->db->where($data);
		return $this->db->get('user');
	}
	public function login_user($email,$password){
		$data = array(
				'email' => $email,
				'password' => $password,
			);
		
		$this->db->where($data);
		return $this->db->get('user');
	}


	public function tampil_event()
	{
		$query = $this->db->query("
			SELECT *,job_event.id as id_event FROM job_event
			JOIN job_perusahaan
			ON job_event.id_perusahaan = job_perusahaan.id
			ORDER BY job_event.id DESC
			");
		return $query->result();
	}
	public function tampil_lowongan($id)
	{
		$query = $this->db->query("
			SELECT *,job_lowongan.id as id_lowongan FROM job_lowongan
			JOIN job_perusahaan
			ON job_lowongan.id_perusahaan = job_perusahaan.id
			WHERE job_lowongan.id_perusahaan = $id
			ORDER BY job_lowongan.id DESC
			");
		return $query->result();
	}
	public function tampil_user($id_user)
	{
		$query = $this->db->query("
			SELECT * FROM user 
			LEFT JOIN profile 
			ON user.id_user = profile.id_user 
			WHERE user.id_level = 2 
			AND user.id_user = $id_user
			");
		return $query->result();
	}
	public function tampil_saved_jobs($id_user)
	{
		$query = $this->db->query("
			SELECT * FROM job_save
			JOIN job_lowongan
			ON job_save.id_lowongan = job_lowongan.id
			JOIN job_perusahaan
			ON job_lowongan.id_perusahaan = job_perusahaan.id
			WHERE job_save.id_user = $id_user
			");
		return $query->result();
	}
	public function tampil_applied_jobs($id_user)
	{
		$query = $this->db->query("
			SELECT * FROM job_apply
			JOIN job_lowongan
			ON job_apply.id_lowongan = job_lowongan.id
			JOIN job_perusahaan
			ON job_lowongan.id_perusahaan = job_perusahaan.id
			WHERE job_apply.id_user = $id_user
			");
		return $query->result();
	}
	public function tampil_akun_perusahaan()
	{
		$query = $this->db->query("
			SELECT * FROM user 
			JOIN job_perusahaan
			ON user.is_jobs = job_perusahaan.id
			WHERE user.id_level = 3
			");
		return $query->result();
	}
	public function tampil_hasil_lamaran($id_perusahaan)
	{
		$query = $this->db->query("
			SELECT * FROM job_apply JOIN job_lowongan ON job_apply.id_lowongan = job_lowongan.id JOIN user ON job_apply.id_user = user.id_user LEFT JOIN profile ON profile.id_user = job_apply.id_user WHERE job_lowongan.id_perusahaan = $id_perusahaan;
			");
		return $query->result();
	}
	public function tampil_hasil_lamaran_sort($id_perusahaan)
	{
		$query = $this->db->query("
			SELECT * FROM job_apply JOIN job_lowongan ON job_apply.id_lowongan = job_lowongan.id JOIN user ON job_apply.id_user = user.id_user LEFT JOIN profile ON profile.id_user = job_apply.id_user WHERE job_lowongan.id_perusahaan = $id_perusahaan ORDER BY job_lowongan.nama_lowongan ASC;
			");
		return $query->result();
	}
	public function tampil_jumlah_lowongan($id_perusahaan)
	{
		$query = $this->db->query("
			SELECT COUNT(*) as jumlah FROM `job_lowongan` WHERE id_perusahaan = $id_perusahaan;
			");
		return $query->result();
	}
	public function tampil_jumlah_lowongan_all()
	{
		$query = $this->db->query("
			SELECT COUNT(*) as jumlah FROM `job_lowongan`;
			");
		return $query->result();
	}
	public function tampil_jumlah_pelamar($id_perusahaan)
	{
		$query = $this->db->query("
			SELECT COUNT(*) as jumlah FROM job_apply JOIN job_lowongan ON job_apply.id_lowongan = job_lowongan.id JOIN user ON job_apply.id_user = user.id_user LEFT JOIN profile ON profile.id_user = job_apply.id_user WHERE job_lowongan.id_perusahaan = $id_perusahaan;
			");
		return $query->result();
	}
	public function tampil_jumlah_pelamar_all()
	{
		$query = $this->db->query("
			SELECT COUNT(*) as jumlah FROM job_apply JOIN job_lowongan ON job_apply.id_lowongan = job_lowongan.id JOIN user ON job_apply.id_user = user.id_user LEFT JOIN profile ON profile.id_user = job_apply.id_user;
			");
		return $query->result();
	}
	public function tampil_cek_saved($id_lowongan,$id_user)
	{
		$query = $this->db->query("
			SELECT * FROM `job_save` WHERE id_lowongan = $id_lowongan AND id_user = $id_user;
			");
		return $query->result();
	}
	public function tampil_cek_apply($id_lowongan,$id_user)
	{
		$query = $this->db->query("
			SELECT * FROM `job_apply` WHERE id_lowongan = $id_lowongan AND id_user = $id_user;
			");
		return $query->result();
	}
	public function tampil_cek_profile($id_user)
	{
		$query = $this->db->query("
			SELECT * FROM `profile` WHERE id_user = $id_user;
			");
		return $query->result();
	}
	public function tampil_id_str($id,$tabel,$primary_key){
		$query = $this->db->query("
			SELECT * FROM $tabel WHERE $primary_key = '$id';
			");
		return $query->result();
	}
	public function tampil_event_now(){
		$query = $this->db->query("
			SELECT * FROM `job_event` JOIN job_perusahaan ON job_event.id_perusahaan = job_perusahaan.id WHERE tgl = CURDATE();
			");
		return $query->result();
	}


	

}

/* End of file m_global.php */
/* Location: ./application/models/m_global.php */