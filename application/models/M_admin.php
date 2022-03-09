<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {

	// login
	public function cekuser($table,$where)
	{
		return $this->db->get_where($table,$where);
	}

	public function dataadmin()
	{
		$this->db->where('email!=','administrator@akuarium.com');
		return $this->db->get('admin')->result();
	}
	public function tambahadmin($data,$tabel)
	{
		return $this->db->insert($tabel,$data);
	}
	public function kirimtoken($user_token,$tabel)
	{
		return $this->db->insert($tabel,$user_token);
	}
	public function updatestatus($email)
	{
		$this->db->set('status', 'verified');
		$this->db->where('email',$email);
		return $this->db->update('admin');
	}
	public function resetpassword($where,$data)
	{
		$this->db->set('password', $data);
		$this->db->where('email',$where);
		return $this->db->update('admin');
	}
	// edit admin
	public function ubahadmin($data,$id)
	{
		$this->db->where('id', $id);
		return $this->db->update('admin', $data);
	}
	// hapusadmin
	public function ambildatafoto($id)
	{
		$this->db->where('id',$id);
		$this->db->select('foto');
		return $this->db->get('admin');
	}
	public function hapusadmin($id)
	{
		$this->db->where('id',$id);
		return $this->db->delete('admin');
	}
}

/* End of file M_admin.php */
/* Location: ./application/models/M_admin.php */