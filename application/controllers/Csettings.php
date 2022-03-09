<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Csettings extends CI_Controller
{
	public function index()
	{
		if ($this->session->userdata('name')) {
			$temperature_db = $this->Mtemperature->getdatatemperature();
			$ph_db = $this->Mph->getdataph();
			$temperature_set = ['10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31', '32', '33', '34', '35', '36', '37', '38', '39', '40'];
			$durasi_kipas = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31', '32', '33', '34', '35', '36', '37', '38', '39', '40', '41', '42', '43', '44', '45', '46', '47', '48', '49', '50', '51', '52', '53', '54', '55', '56', '57', '58', '59', '60',];
			$ph_set = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14'];
			$durasi_pompa = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31', '32', '33', '34', '35', '36', '37', '38', '39', '40', '41', '42', '43', '44', '45', '46', '47', '48', '49', '50', '51', '52', '53', '54', '55', '56', '57', '58', '59', '60',];
			$data = array(
				'temp_set' => $temperature_set,
				'temp_db' => $temperature_db,
				'durasi_kipas' => $durasi_kipas,
				'ph_set' => $ph_set,
				'ph_db' => $ph_db,
				'durasi_pompa' => $durasi_pompa
			);
			$name = array(
				'name' => $this->Madmin->datapassword(),
			);
			$this->load->view('layouts/header', $name);
			$this->load->view('settings/index', $data);
			$this->load->view('layouts/footer');
		} else {
			redirect('cdashboard');
		}
	}
	public function updatefuzzytemp()
	{
		$data = array(
			'dingin' => $this->input->post('temp_dingin'),
			'sedang' => $this->input->post('temp_sedang'),
			'panas' => $this->input->post('temp_panas'),
			'durasi_dingin' => $this->input->post('durasi_dingin'),
			'durasi_sedang' => $this->input->post('durasi_sedang'),
			'durasi_panas' => $this->input->post('durasi_panas'),
		);
		$cek = $this->Mtemperature->updatedatatemperature($data);
		if ($cek) {
			$this->session->set_flashdata('notifikasi', 'Data updated successfully');
			redirect('csettings');
		} else {
			$this->session->set_flashdata('gagal', '<div class="alert alert-danger text-light alert-link" role="alert" style="margin-top:50px;">
			email atau password tidak valid!
		  </div>');
			redirect('csettings');
		}
	}

	public function updatefuzzyph()
	{
		$data = array(
			'rendah' => $this->input->post('ph_rendah'),
			'sedang' => $this->input->post('ph_sedang'),
			'tinggi' => $this->input->post('ph_tinggi'),
			'durasi_rendah' => $this->input->post('durasi_rendah'),
			'durasi_sedang' => $this->input->post('durasi_sedang'),
			'durasi_tinggi' => $this->input->post('durasi_tinggi'),
		);
		$cek = $this->Mph->updatedataph($data);
		if ($cek) {
			$this->session->set_flashdata('notifikasi', 'Data updated successfully');
			redirect('csettings');
		} else {
			$this->session->set_flashdata('gagal', '<div class="alert alert-danger text-light alert-link" role="alert" style="margin-top:50px;">
			email atau password tidak valid!
		  </div>');
			redirect('csettings');
		}
	}




	// Fuzzy Temperatur untuk menentukan durasi kipas menyala
	public function fuzzyph()
	{
		// ambil semua data db dari tabel PH
		$getdata = $this->Mph->fuzzyph();

		// inisialisasi variabel durasi
		$durasi = 0;

		//data PH dari database
		$ph_saat_ini = $getdata['ph_saat_ini'];
		$ph_rendah = $getdata['rendah'];
		$ph_sedang = $getdata['sedang'];
		$ph_tinggi = $getdata['tinggi'];

		// konversi durasi kipas dari menit ke milisecond
		$rule_durasi_rendah = $getdata['durasi_rendah'] * 60000;
		$rule_durasi_sedang = $getdata['durasi_sedang'] * 60000;
		$rule_durasi_tinggi = $getdata['durasi_tinggi'] * 60000;

		// fuzzy logic sukamoto untuk menentukan durasi kipas 

		// menentukan durasi kipas ketika ph sekarang lebih kecil dari ph rendah atau ph saat ini lebih besar dari suhu tinggi
		if ($ph_saat_ini < $ph_rendah || $ph_saat_ini > $ph_tinggi) {
			$durasi = 0;
		}
		// menentukan durasi kipas ketika ph sekarang lebih besar dari ph rendah dan ph saat ini lebih kecil dari ph sedang
		elseif ($ph_saat_ini > $ph_rendah && $ph_saat_ini < $ph_sedang) {
			$derajat_rendah = ($ph_sedang - $ph_saat_ini) / ($ph_sedang - $ph_rendah);
			$derajat_sedang = ($ph_saat_ini - $ph_rendah) / ($ph_sedang - $ph_rendah);
			$durasi = (($derajat_rendah * $rule_durasi_rendah) + ($derajat_sedang * $rule_durasi_sedang)) / ($derajat_rendah + $derajat_sedang);
		}
		// menentukan durasi kipas ketika ph saat ini lebih besar dari ph sedang dan ph saat ini lebih kecil dari ph tinggi
		else if ($ph_saat_ini > $ph_sedang && $ph_saat_ini < $ph_tinggi) {
			$derajat_sedang = ($ph_tinggi - $ph_saat_ini) / ($ph_tinggi - $ph_sedang);
			$derajat_tinggi = ($ph_saat_ini - $ph_sedang) / ($ph_tinggi - $ph_sedang);
			$durasi = (($derajat_sedang * $rule_durasi_sedang) + ($derajat_tinggi * $rule_durasi_tinggi)) / ($derajat_sedang + $derajat_tinggi);
		} else if ($ph_saat_ini == $ph_rendah) {
			$durasi = $rule_durasi_rendah;
		} else if ($ph_saat_ini == $ph_sedang) {
			$durasi = $rule_durasi_sedang;
		} else if ($ph_saat_ini == $ph_tinggi) {
			$durasi = $rule_durasi_tinggi;
		}

		$data = array(
			'ph' => $ph_saat_ini,
			'durasi' => $durasi

		);

		echo json_encode($data);
	}



	// FUZZY TEMPERARTURE
	public function fuzzytemp()
	{
		// ambil semua data db dari tabel temperature
		$getdata = $this->Mtemperature->fuzzytemp();

		// inisialisasi variabel durasi
		$durasi = 0;

		//data suhu dari database
		$suhu_saat_ini = $getdata['suhu_saat_ini'];
		$suhu_dingin = $getdata['dingin'];
		$suhu_sedang = $getdata['sedang'];
		$suhu_panas = $getdata['panas'];

		// konversi durasi kipas dari menit ke milisecond
		$rule_durasi_dingin = $getdata['durasi_dingin'] * 60000;
		$rule_durasi_sedang = $getdata['durasi_sedang'] * 60000;
		$rule_durasi_panas = $getdata['durasi_panas'] * 60000;

		// fuzzy logic sukamoto untuk menentukan durasi kipas 

		// menentukan durasi kipas ketika suhu sekarang lebih kecil dari suhu dingin atau suhu saat ini lebih besar dari suhu panas
		if ($suhu_saat_ini < $suhu_dingin || $suhu_saat_ini > $suhu_panas) {
			$durasi = 0;
		}
		// menentukan durasi kipas ketika suhu sekarang lebih besar dari suhu dingin dan suhu saat ini lebih kecil dari suhu sedang
		elseif ($suhu_saat_ini > $suhu_dingin && $suhu_saat_ini < $suhu_sedang) {
			$derajat_dingin = ($suhu_sedang - $suhu_saat_ini) / ($suhu_sedang - $suhu_dingin);
			$derajat_sedang = ($suhu_saat_ini - $suhu_dingin) / ($suhu_sedang - $suhu_dingin);
			$durasi = (($derajat_dingin * $rule_durasi_dingin) + ($derajat_sedang * $rule_durasi_sedang)) / ($derajat_dingin + $derajat_sedang);
		}
		// menentukan durasi kipas ketika suhu saat ini lebih besar dari suhu sedang dan suhu saat ini lebih kecil dari suhu panas
		else if ($suhu_saat_ini > $suhu_sedang && $suhu_saat_ini < $suhu_panas) {
			$derajat_sedang = ($suhu_panas - $suhu_saat_ini) / ($suhu_panas - $suhu_sedang);
			$derajat_panas = ($suhu_saat_ini - $suhu_sedang) / ($suhu_panas - $suhu_sedang);
			$durasi = (($derajat_sedang * $rule_durasi_sedang) + ($derajat_panas * $rule_durasi_panas)) / ($derajat_sedang + $derajat_panas);
		} else if ($suhu_saat_ini == $suhu_dingin) {
			$durasi = $rule_durasi_dingin;
		} else if ($suhu_saat_ini == $suhu_sedang) {
			$durasi = $rule_durasi_sedang;
		} else if ($suhu_saat_ini == $suhu_panas) {
			$durasi = $rule_durasi_panas;
		}

		$data = array(
			'suhu' => $suhu_saat_ini,
			'durasi' => $durasi

		);

		echo json_encode($data);
	}
}
