<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Madmin extends CI_Model
{


	public function cekuser($table, $data)
	{
		return $this->db->get_where($table, $data)->num_rows();
	}
	public function getdatauser($table, $data)
	{
		return $this->db->get_where($table, $data)->row_array();
	}
	public function dataadmin()
	{
		return $this->db->get('admin')->result();
	}
	public function datapassword()
	{
		return $this->db->get('admin')->result_array();
	}
	public function updatedataadmin($data)
	{
		$this->db->where('id', 1);
		return $this->db->update('admin', $data);
	}
}
