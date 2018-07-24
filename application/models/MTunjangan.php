          <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MTunjangan extends CI_Model
{

function barang_list(){
        $hasil=$this->db->query("SELECT * FROM tunjangan");
        return $hasil->result();
    }
 
     function simpan_barang($nama,$besar,$status,$jenis){
        $hasil=$this->db->query("INSERT INTO tunjangan (nama_tunjangan,besar_tunjangan,status,jenis)VALUES('$nama','$besar','$status','$jenis')");
        return $hasil;
    }
 
    function get_barang_by_kode($id){
        $hsl=$this->db->query("SELECT * FROM tunjangan WHERE id='$id'");
        if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'id' => $data->id,
                    'nama_tunjangan' => $data->nama_tunjangan,
                    'besar_tunjangan' => $data->besar_tunjangan,
                    'status' => $data->status,
                    'jenis' => $data->jenis,
                    );
            }
        }
        return $hasil;
    }
 
    function update_barang($id,$nama_tunjangan,$besar_tunjangan,$status,$jenis){
        $hasil=$this->db->query("UPDATE tunjangan SET nama_tunjangan='$nama_tunjangan',besar_tunjangan='$besar_tunjangan',status='$status',jenis='$jenis' WHERE id='$id'");
        return $hasil;
    }
 
    function hapus_barang($id){
        $hasil=$this->db->query("DELETE FROM tunjangan WHERE id='$id'");
        return $hasil;
    }
 
}