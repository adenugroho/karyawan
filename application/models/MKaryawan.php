   <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MKaryawan extends CI_Model
{

function karyawan_list(){
        $hasil=$this->db->query("SELECT * FROM karyawan");
        return $hasil->result();
    }
 
     function simpan_karyawan($nip,$nama,$username,$password,$bank,$no_rek){
        $hasil=$this->db->query("INSERT INTO karyawan (nip,nama,username,password,bank,no_rek)VALUES('$nip','$nama','$username','$password','$bank','$no_rek')");
        return $hasil;
    }
 
    function get_karyawan_by_kode($id){
        $hsl=$this->db->query("SELECT * FROM karyawan WHERE id='$id'");
        if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'id' => $data->id,
                    'nama' => $data->nama,
                    'username' => $data->username,
                    'bank' => $data->bank,
                    'no_rek' => $data->no_rek,
                    );
            }
        }
        return $hasil;
    }

     function get_karyawan_by_password($id){
        $hsl=$this->db->query("SELECT * FROM karyawan WHERE id='$id'");
        if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'id' => $data->id,
                   
                    );
            }
        }
        return $hasil;
    }
 
    function update_karyawan($id,$nama,$username,$bank,$no_rek){
        $hasil=$this->db->query("UPDATE karyawan SET nama='$nama',username='$username',bank='$bank',no_rek='$no_rek' WHERE id='$id'");
        return $hasil;
    }

     function update_password($id,$password){
        $hasil=$this->db->query("UPDATE karyawan SET password='$password' WHERE id='$id'");
        return $hasil;
    }
 
    function hapus_karyawan($id){
        $hasil=$this->db->query("DELETE FROM karyawan WHERE id='$id'");
        return $hasil;
    }
		
		function code_otomatis(){
            $this->db->select('Right(karyawan.nip,3) as kode ',false);
            $this->db->order_by('id', 'desc');
            $this->db->limit(1);
            $query = $this->db->get('karyawan');
            if($query->num_rows()<>0){
                $data = $query->row();
                $kode = intval($data->kode)+1;
            }else{
                $kode = 1;

            }
            $kodemax = str_pad($kode,3,"0",STR_PAD_LEFT);
            $kodejadi  = "K".$kodemax;
            return $kodejadi;

        }

function add()
{
    
    $data = array(
        'nip' => $_POST['nip'],
        'nama' => $_POST['nama']
        
        
    );
    $this->db->insert('karyawan', $data);
}

public function get_product_keyword1($keyword,$keyword1){
			$this->db->select('*');
			$this->db->from('data');
			$this->db->where('tanggal >=',$keyword);
			$this->db->where('tanggal <=',$keyword1);
			return $this->db->get()->result();
		}

}