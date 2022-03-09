<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Clogin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('login/index');
	}
	public function checklogin()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		if ($this->form_validation->run() ==  FALSE) {
			$this->session->set_flashdata('gagal', '<div class="alert alert-danger text-light alert-link" role="alert" style="margin-top:50px;">
  						Masukan data dengan benar!
						</div>');
			redirect('clogin');
		} else {
			$data = array(
				'email' => $this->input->post('email'),
				'password' => md5($this->input->post('password'))
			);

			$cekuser = $this->Madmin->cekuser('admin', $data);
			$getdatauser = $this->Madmin->getdatauser('admin', $data);
			if ($cekuser > 0) {
				$uye = array(
					'name' => $getdatauser['name'],
					'email' => $getdatauser['email']
				);
				$this->session->set_userdata($uye);
				$this->session->set_flashdata('notifikasi', 'Login Success !!');
				redirect('cdashboard', 'refresh');
			} else if ($cekuser < 1) {
				$this->session->set_flashdata('gagal', '<div class="alert alert-danger text-light alert-link" role="alert" style="margin-top:50px;">
  						email atau password tidak valid!
						</div>');
				redirect('clogin');
			}
		}
	}
	public function logout()
	{
		$this->session->unset_userdata('name');
		$this->session->unset_userdata('email');
		redirect('clogin', 'refresh');
	}
}
