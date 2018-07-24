<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MInput extends CI_Model
{

function simpan()
    {
    	$tanggal=date('Y-m-d');
        $simpan_data=array(
            'nama_pengunjung'  => $this->input->post('nama_pengunjung'),
            'ruangan'      => $this->input->post('ruangan'),
            'tanggal'      => $tanggal,
            'acara'         => $this->input->post('acara')
            
       );
        $simpan = $this->db->insert('data', $simpan_data);
        return $simpan;
    }

}