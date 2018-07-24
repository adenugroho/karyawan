<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MSia extends CI_Model
{

public function ambil_data($num, $offset){   
   
     $this->db->order_by('nis', 'ASC');

$data = $this->db->get('data_siswa', $num, $offset);

return $data->result();
    }

    	public function get_product_keyword($keyword){
			$this->db->select('*');
			$this->db->from('data_siswa');
			$this->db->like('nama_siswa',$keyword);
			
			return $this->db->get()->result();
		}
	 	
		public function get_kelas_keyword($keyword){
            $this->db->select('*');
            $this->db->from('data_siswa');
            $this->db->like('kelas',$keyword);
            
            return $this->db->get()->result();
        }
        


function save()
{
    $date=date('d/m/y');
   
    $data = array(
        'nis' => $_POST['nis'],
        'nama_siswa' => $_POST['nama_siswa'],
        'kelas' => $_POST['kelas'],
        'keterangan' => $_POST['keterangan'],
        'tanggal' => $date
        
    );
   $save= $this->db->insert('data_sai', $data);
   return $save;
}

function updates()
{
    $date=date('d/m/y');
    $data = array(
        'tanggal_absen' => $date
        
    );
     $this->db->where('nis', $_POST['nis']);
   $update= $this->db->update('data_siswa', $data);
    return $update;
}

function updateon()
{
    
    $data = array(
        'status' => 'ON'
    );
     $this->db->where('id', '1');
   $update= $this->db->update('pengaturan_absen', $data);
    return $update;
}

function updateoff()
{   
    $data = array(
        'status' => 'OFF'
    );
     $this->db->where('id', '1');
   $update= $this->db->update('pengaturan_absen', $data);
    return $update;
}





}