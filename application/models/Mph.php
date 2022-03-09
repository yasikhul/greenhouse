<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mph extends CI_Model
{
    public function getdataph()
    {
        return $this->db->get('ph')->result();
    }
    public function updatedataph($data)
    {
        $this->db->where('id=', 1);
        return $this->db->update('ph', $data);
    }
    public function fuzzyph()
    {
        return $this->db->get('ph')->row_array();
    }
}
