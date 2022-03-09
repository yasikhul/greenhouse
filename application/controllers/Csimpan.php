<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Csimpan extends CI_Controller
{
    public function update()
    {
        if (isset($_GET['suhu'])) {
            if (isset($_GET['ph'])) {

                $data = array(
                    'suhu_saatini' => $this->input->get('suhu', TRUE),
                    'ph' => $this->input->get('ph', TRUE)
                );
                var_dump($data);
                die;
                // $suhu = $this->input->get('suhu', TRUE);
                // $pakan = $this->input->get('pakan', TRUE);

                // $this->db->set('suhu_saatini', $suhu);
                // $this->db->where('id', 1);
                // $this->db->update('kontrol_suhu_air');

                // $this->db->set('stok_pakan', $pakan);
                // $this->db->where('id', 1);
                // $this->db->update('pakan');
            } else {
                echo "ERROR";
            }
        } else {
            echo "Variabel data tidak terdefinisi";
        }
    }
}
