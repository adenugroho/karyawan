 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MEditsia extends CI_Model
{

public function ambil_data($num, $offset){  
   
    $this->db->select("s.*,a.s");
    $this->db->where("s.nis=a.nis");
     $this->db->from("data_sai s,data_siswa a" , $num, $offset);



return  $this->db->get()->result();
    }

    	public function get_product_keyword($keyword){
			$this->db->select('*');
			$this->db->from('data_sia');
			$this->db->like('nama_siswa',$keyword);

			
			return $this->db->get()->result();
		}
		
		public function get_kelas_keyword($keyword,$tanggal){
            $this->db->select('*');
            $this->db->from('data_sai');
            $this->db->like('kelas',$keyword);
             $this->db->like('tanggal',$tanggal);
            return $this->db->get()->result();
        }
        


function save()
{
    $date=date('d/m/y');
    $time=date('h:m:s');
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
        'keterangan' => $_POST['keterangan']
        
    );
     $this->db->where('id', $_POST['id']);
   $update= $this->db->update('data_sai', $data);
    return $update;
}

 
function jumlah1()
{
   $keterangan = $_POST['keterangan'];
   

   if($keterangan == 'S'){
   $S = $_POST['S'];
   
    $data = array(
        'S' => $S
        
    );
     $this->db->where('nis', $_POST['nis']);
   $update= $this->db->update('data_siswa', $data);
    return $update;
}else if($keterangan == 'I'){
$data = array(
        'keterangan' => $keterangan
        
    );
     $this->db->where('id', $_POST['id']);
   $update= $this->db->update('data_sai', $data);
    return $update;
}else{
$data = array(
        'keterangan' => $keterangan
        
    );
     $this->db->where('id', $_POST['id']);
   $update= $this->db->update('data_sai', $data);
    return $update;
}

}
}