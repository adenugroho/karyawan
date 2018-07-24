        <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MSallary extends CI_Model
{

function sallary_list(){
        $hasil=$this->db->query("SELECT * FROM peng_sallary");
        return $hasil->result();
    }
 
     function simpan_barang($kobar,$nabar,$harga){
        $hasil=$this->db->query("INSERT INTO peng_sallary (golongan,gaji_pokok,uang_lembur)VALUES('$kobar','$nabar','$harga')");
        return $hasil;
    }
 
    function get_sallary_by_kode($id){
        $hsl=$this->db->query("SELECT * FROM peng_sallary WHERE id='$id'");
        if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'id' => $data->id,
                    'golongan' => $data->golongan,
                    'gaji_pokok' => $data->gaji_pokok,
                    'uang_lembur' => $data->uang_lembur,
                    );
            }
        }
        return $hasil;
    }
 
    function update_sallary($id,$golongan,$gaji_pokok,$uang_lembur){
        $hasil=$this->db->query("UPDATE peng_sallary SET golongan='$golongan',gaji_pokok='$gaji_pokok',uang_lembur='$uang_lembur' WHERE id='$id'");
        return $hasil;
    }
 
    function hapus_sallary($id){
        $hasil=$this->db->query("DELETE FROM peng_sallary WHERE id='$id'");
        return $hasil;
    }
 
}