<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mtemperature extends CI_Model {
    public function getdatatemperature()
    {
        return $this->db->get('temperature')->result();
    }
    public function updatedatatemperature($data)
    {
        $this->db->where('id=',1);
		return $this->db->update('temperature', $data);
    }
    public function fuzzytemp()
    {
        return $this->db->get('temperature')->row_array();
    }
    
}
