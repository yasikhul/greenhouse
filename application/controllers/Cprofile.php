<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cprofile extends CI_Controller
{
    public function index()
    {
        if ($this->session->userdata('name')) {
            $getdataadmin = array(
                'name' => $this->Madmin->datapassword(),
                'dataadmin' => $this->Madmin->dataadmin(),
            );
            $this->load->view('layouts/header', $getdataadmin);
            $this->load->view('profile/index', $getdataadmin);
            $this->load->view('layouts/footer');
        } else {
            redirect('cdashboard');
        }
    }
    public function updatedataadmin()
    {

        $getpassword = array(
            'dataadmin' => $this->Madmin->datapassword(),
        );

        if ($getpassword['dataadmin'][0]['password'] == md5($this->input->post('password'))) {
            if ($this->input->post('passwordbaru') != "") {
                if ($this->input->post('passwordbaru') != $this->input->post('passwordbaru2')) {
                    $this->session->set_flashdata('notifikasiError', "new password doesn't match");
                    redirect('cprofile');
                } else {
                    $data = array(
                        'name' => $this->input->post('name'),
                        'email' => $this->input->post('email'),
                        'password' => md5($this->input->post('passwordbaru'))
                    );
                    $cek = $this->Madmin->updatedataadmin($data);
                    if ($cek) {
                        $this->session->set_flashdata('notifikasi', 'Password has been changed');
                        redirect('clogin');
                    }
                }
            } else {
                $data = array(
                    'name' => $this->input->post('name'),
                    'email' => $this->input->post('email'),
                    'password' => $getpassword['dataadmin'][0]['password']
                );
                $cek = $this->Madmin->updatedataadmin($data);
                if ($cek) {
                    $this->session->set_flashdata('notifikasi', 'Data updated successfully');
                    redirect('cprofile');
                }
            }
        } else {
            $this->session->set_flashdata('notifikasiError', "Password Incorrect!!");
            redirect('cprofile');
        }
    }
}
