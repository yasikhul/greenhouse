<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cdashboard extends CI_Controller
{
	public function index()
	{
		$name = array(
			'name' => $this->Madmin->datapassword(),
		);
		$this->load->view('layouts/header', $name);
		$this->load->view('dashboard/index');
		$this->load->view('layouts/footer');
	}
}
