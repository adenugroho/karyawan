        <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MDivisi extends CI_Model
{

function barang_list(){
        $hasil=$this->db->query("SELECT * FROM divisi");
        return $hasil->result();
    }
 
     function simpan_barang($nama,$nip,$new_divisi){
        $hasil=$this->db->query("INSERT INTO divisi (nama,nip,nama_pimpinan)VALUES('$new_divisi','$nip','$nama')");
        return $hasil;
    }
 
    function get_barang_by_kode($id){
        $hsl=$this->db->query("SELECT * FROM divisi WHERE id='$id'");
        if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'nama' => $data->nama,
                    'nip' => $data->nip,
                    'nama_pimpinan' => $data->nama_pimpinan,
                    );
            }
        }
        return $hasil;
    }
 
    function update_barang($id,$nip,$nama,$nama_pimpinan){
        $hasil=$this->db->query("UPDATE divisi SET nip='$nip',nama_pimpinan='$nama_pimpinan' WHERE id='$id'");
        return $hasil;
    }
 
    function hapus_barang($id){
        $hasil=$this->db->query("DELETE FROM divisi WHERE id='$id'");
        return $hasil;
    }
 
}